<?php

namespace App\Controller;

use App\Entity\Ratings;
use App\Entity\Jokes;
use App\Repository\JokesRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class RateJokeController extends AbstractController
{
    #[Route('/rate/joke/{id}', name: 'app_rate_joke')]
    public function index(int $id, ManagerRegistry $doctrine, JokesRepository $jokesRepository): Response
    {
        $myRating = '0';
        if (isset($_GET['rating'])){
            $myRating = (int)addslashes($_GET['rating']);
        }

        $joke = $jokesRepository->find($id);
        $jokeOriginId = $joke->getOriginId();

        $rating = new Ratings();
        $rating->setJokeId($id);
        $rating->setJokeOriginId($jokeOriginId);
        $rating->setRating($myRating);

        $entityManager = $doctrine->getManager();

        $entityManager->persist($rating);

        $entityManager->flush();


        $form = $this->createFormBuilder($joke)
            ->add('joke', TextType::class)
            ->add('search', SubmitType::class, ['label' => 'Search for Jokes'])
            ->getForm();

        return $this->redirectToRoute('app_search', [
            'form' => $form,
            'new_rating' => 'true'

        ]);
    }
}
