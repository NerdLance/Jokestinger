<?php

namespace App\Controller;

use App\Entity\Jokes;
use App\Entity\Ratings;
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

        $jokesDisplay = [];

        $jokesCount = 0;
        $searchExists = false;
        $newRating = false;
        $ratedJokeId = false;

        $searchQuery = "";

        $joke = new Jokes();
        $joke->setJoke('Sample joke search');

        $form = $this->createFormBuilder($joke)
            ->add('joke', TextType::class)
            ->add('search', SubmitType::class, ['label' => 'Search for Jokes'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            if (isset($_GET['new-rating'])){
                unset($_GET['new-rating']);
            }
            $searchExists = true;

            $joke = $form->getData();
            $searchQuery = $joke->getJoke();

            $entityManager = $doctrine->getManager();

            $query = $entityManager->createQuery(
                "SELECT j
                FROM App\Entity\Jokes j
                WHERE j.joke LIKE CONCAT('%', :joke_search, '%')"
            )->setParameter('joke_search', $searchQuery);

            // returns an array of Joke objects
            $existingJokes = $query->getResult();

            foreach($existingJokes as $index=>$curJoke){
                $curOriginId = $curJoke->getOriginId();

                $ratingsRepository = $doctrine->getRepository(Ratings::class);
                $ratings = $ratingsRepository->findBy(
                    ['joke_origin_id' => $curOriginId ]
                );

                $ratingsTotal = 0;
                foreach($ratings as $curRating){
                    $ratingsTotal += $curRating->getRating();
                }

                $ratingsCount = count($ratings);
                $rCount = number_format($ratingsCount, 4);
                $rTotal = number_format($ratingsTotal, 4);
                
                if ($ratingsCount > 0){
                    $averageRating = round(($rTotal / $rCount), 2, PHP_ROUND_HALF_UP);
                } else {
                    $averageRating = 0;
                }

                $newJokeDisplay = new JokeDisplay();
                $newJokeDisplay->set_joke_id($curJoke->getId());
                $newJokeDisplay->set_joke_origin_id($curJoke->getOriginId());
                $newJokeDisplay->set_joke_text($curJoke->getJoke());
                $newJokeDisplay->set_joke_rating($averageRating);

                $jokesDisplay[] = $newJokeDisplay;

            }

            $jokesCount = count($existingJokes);
        }
        
        if (isset($_GET['new-rating'])){
            if ($_GET['new-rating']){
                $newRating = true;

                if (isset($_GET['joke-id'])){
                    $ratedJokeId = $_GET['joke-id'];
                }
            }
        }

        

        return $this->renderForm('search/index.html.twig', [
            'form' => $form,
            'existing_jokes' => $existingJokes,
            'jokes_display' => $jokesDisplay,
            'jokes_count' => $jokesCount,
            'search_exists' => $searchExists,
            'search_query' => $searchQuery,
            'new_rating' => $newRating,
            'joke_id' => $ratedJokeId,
        ]);
    }
}

class JokeDisplay {
    public $joke_id;
    public $joke_origin_id;
    public $joke_text;
    public $joke_rating;

    function set_joke_id($joke_id){
        $this->joke_id = $joke_id;
    }

    function get_joke_id(){
        return $this->joke_id;
    }

    function set_joke_origin_id($joke_origin_id){
        $this->joke_origin_id = $joke_origin_id;
    }

    function get_joke_origin_id(){
        return $this->joke_origin_id;
    }

    function set_joke_text($joke_text){
        $this->joke_text = $joke_text;
    }

    function get_joke_text(){
        return $this->joke_text;
    }

    function set_joke_rating($joke_rating){
        $this->joke_rating = $joke_rating;
    }

    function get_joke_rating(){
        return $this->joke_rating;
    }
}
