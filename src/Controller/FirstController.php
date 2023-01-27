<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first/{firstName}/{lastName}', name: 'app_first')]
    public function index(Request $request, $firstName, $lastName): Response
    {
        dd($request);
        return $this->render('first/index.html.twig', ['firstName' => $firstName, 'lastName' => $lastName]);
    }

    #[Route('/secret', name: 'secret')]
    public function secret(): Response
    {
        $x = random_int(0, 9);
        if($x == 3){
            return $this->forward('App\\Controller\\FirstController::index');
        }
        return $this->render('first/secret.html.twig', ['x' => $x]);
    }
}
