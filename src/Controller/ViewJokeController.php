<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewJokeController extends AbstractController
{
    #[Route('/view/joke', name: 'app_view_joke')]
    public function index(): Response
    {
        return $this->render('view_joke/index.html.twig', [
            'controller_name' => 'ViewJokeController',
        ]);
    }
}
