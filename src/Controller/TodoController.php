<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class TodoController extends AbstractController
{
    #[Route('/todo', name: 'todo')]
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        if(!$session->has('todos')){
            $todos = [
                'proprete' => 'Faire le linge',
                'mourriture' => 'Preparer a manger',
                'apprendre' => 'Lire un livre sur la litterature'
            ];
            //$session->set('todos', $todos);
            $session = $this->addFlash(
               'info',
               "La liste des todos vient d'etre initialisee"
            );
            
        }
        return $this->render('todo/index.html.twig');
    }

    #[Route('/todo/add/{name}/{content}', name: 'todo.add')]
    public function addTodo(Request $request, $name, $content): RedirectResponse {
        $session = $request->getSession();
        if($session->has('todos')){
            $todos = $session->get('todos');
            if(isset($todos[$name])){
                $this->addFlash(
                    'error',
                    "Le todo dont l'index est $name existe deja"
                 );
            } else {
                $todos[$name] = $content;
                $session->set('todos', $todos);
                //dd($todos);
                $this->addFlash(
                    'success',
                    "Le todo dont l'index est $name a ete ajoute avec succes"
                );
            }
        } else {

            $this->addFlash(
                'error',
                "La liste des todos n'est pas encore initialisee"
             );
        }

        return $this->redirectToRoute('todo');
    }
}
