<?php

namespace App\Controller;

use App\Entity\Jokes;
use App\Repository\JokesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    #[Route('/search', name: 'app_search')]
    public function index(Request $request, ManagerRegistry $doctrine, JokesRepository $jokesRepository): Response
    {
        
        $existingJokes = [];
        $jokesCount = 0;
        $searchExists = false;
        $newRating = false;

        $searchQuery = "";

        $joke = new Jokes();
        $joke->setJoke('Sample joke search');

        $form = $this->createFormBuilder($joke)
            ->add('joke', TextType::class)
            ->add('search', SubmitType::class, ['label' => 'Search for Jokes'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $searchExists = true;

            $joke = $form->getData();
            $searchQuery = $joke->getJoke();

            $entityManager = $doctrine->getManager();

            $query = $entityManager->createQuery(
                "SELECT j
                FROM App\Entity\Jokes j
                WHERE j.joke LIKE CONCAT('%', :joke_search, '%')"
            )->setParameter('joke_search', $searchQuery);

            // returns an array of Product objects
            $existingJokes = $query->getResult();
            $jokesCount = count($existingJokes);
        }
        
        if (isset($_GET['new_rating'])){
            if ($_GET['new_rating']){
                $newRating = true;
            }
        }
        

        return $this->renderForm('search/index.html.twig', [
            'form' => $form,
            'existing_jokes' => $existingJokes,
            'jokes_count' => $jokesCount,
            'search_exists' => $searchExists,
            'search_query' => $searchQuery,
            'new_rating' => $newRating,
        ]);
    }
}
