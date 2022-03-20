<?php

namespace App\Controller;

use App\Entity\Jokes;
use App\Repository\JokesRepository;
use Doctrine\Persistence\ManagerRegistry;
//use Symfony\Component\HttpFoundation\Request
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ImportController extends AbstractController
{
    #[Route('/import', name: 'app_import')]
    public function getJokes(ManagerRegistry $doctrine, JokesRepository $jokesRepository): Response
    {
        $allJokes = [];
        $newJokes = [];
        $jokesExist = "false";
        $totalJokes = 0;
        $jokeCounter = 0;
        $newJokeCounter = 0;
        $newJokes = false;
        $baseURL = "https://icanhazdadjoke.com/search?term=hey&limit=30";

        $headers = array(
            "Content-Type: application/json",
            "Accept: application/json",
        );

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $baseURL,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers,
        ]);

        $rawResponse = curl_exec($curl);
        $info = curl_getinfo($curl);
        curl_close($curl);

        if ($info['http_code'] === 200){
            $response = json_decode($rawResponse, true);
            $currentJokes = $response['results'];
            foreach ($currentJokes as $pushJoke){
                array_push($allJokes, $pushJoke);
            }
            $totalPages = $response['total_pages'];
            $totalJokes = $response['total_jokes'];
        }

        /* For Multiple Pages, iterate through each, starting at Page 2
        ** and grab fresh results
        */
        if ($totalPages > 1){
            for ($curPage = 2; $curPage <= $totalPages; $curPage++){
                $curl = curl_init();

                // Update URL with Current Page Iteration
                $currentURL = "https://icanhazdadjoke.com/search?term=hey&limit=30&page=".$curPage;
                curl_setopt_array($curl, [
                    CURLOPT_URL => $currentURL,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_HTTPHEADER => $headers,
                ]);

                $rawResponse = curl_exec($curl);
                $info = curl_getinfo($curl);
                curl_close($curl);
                if ($info['http_code'] === 200){
                    $response = json_decode($rawResponse, true);
                    $currentJokes = $response['results'];

                    // Push Each New Joke to the end of the allJokes Array
                    foreach($currentJokes as $pushJoke){
                        array_push($allJokes, $pushJoke);
                    }
                }
            }
        }

        $entityManager = $doctrine->getManager();

        // Loop through all jokes & check db before adding
        foreach ($allJokes as $jokeToAdd){
            $jokeCounter++;

            $curID = $jokeToAdd['id'];

            //$existingJoke = $jokesRepository->findBy(['origin_id' => $curID]);
            
            $query = $entityManager->createQuery(
                'SELECT j
                FROM App\Entity\Jokes j
                WHERE j.origin_id = :origin_id'
            )->setParameter('origin_id', $jokeToAdd['id']);

            // returns an array of Product objects
            $existingJoke = $query->getResult();

            if (!$existingJoke){
                $newJokeCounter++;
                $newJokes = true;

                // Create the Joke Object we'll be adding
                $joke = new Jokes();
                $joke->setOriginId($jokeToAdd['id']);
                $joke->setJoke($jokeToAdd['joke']);

                // Create our Handler
                //$entityManager = $doctrine->getManager();

                // Add Joke to Persistence
                // Finish Loop and then Flush
                $entityManager->persist($joke);
            }
        }

        if ($newJokeCounter > 0){
            $entityManager->flush();
        }

        return $this->render('import/index.html.twig', [
            'controller_name' => 'ImportController',
            'jokes' => $allJokes,
            'jokes_exist' => $jokesExist,
            'total_jokes' => $totalJokes,
            'total_pages' => $totalPages,
            'joke_counter' => $jokeCounter,
            'new_joke_counter' => $newJokeCounter,
        ]);
    }
}
