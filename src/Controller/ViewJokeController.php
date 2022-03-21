<?php

namespace App\Controller;

use App\Entity\Jokes;
use App\Entity\Ratings;
use App\Entity\Comments;
use App\Repository\JokesRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ViewJokeController extends AbstractController
{
    #[Route('/view/joke/{id}', name: 'app_view_joke')]
    public function index(int $id, Request $request, ManagerRegistry $doctrine, JokesRepository $jokesRepository): Response
    {
        $commentPublished = false;

        $joke = $jokesRepository->find($id);

        $comment = new Comments();

        $form = $this->createFormBuilder($comment)
            ->add('comment', TextType::class)
            ->add('submit', SubmitType::class, ['label' => 'Add Comment'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $comment = $form->getData();
            $commentBody = $comment->getComment();
            $commentEscaped = addslashes($commentBody);
            $comment->setComment($commentEscaped);
            $comment->setJokeOriginId($joke->getOriginId());

            $entityManager = $doctrine->getManager();

            $entityManager->persist($comment);

            $entityManager->flush();

            $commentPublished = true;
        }


        $commentsRepository = $doctrine->getRepository(Comments::class);
        $comments = $commentsRepository->findBy(
            ['joke_origin_id' => $joke->getOriginId() ]
        );

        foreach($comments as $curComment){
            $curComment->setComment(stripslashes($curComment->getComment()));
        }

        return $this->renderForm('view_joke/index.html.twig', [
            'controller_name' => 'ViewJokeController',
            'form' => $form,
            'joke' => $joke,
            'comment_published' => $commentPublished,
            'comments' => $comments,
        ]);
    }
}
