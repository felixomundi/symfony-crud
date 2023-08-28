<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        // return $this->render('movies/index.html.twig', [
        //     'controller_name' => 'MoviesController',
        // ]);
        return $this->render('movies/index.html.twig');
    }
}
