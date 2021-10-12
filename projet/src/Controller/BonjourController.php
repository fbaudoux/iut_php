<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    /**
     * @Route("bonjour/{name}", name="salut")
     * @Route("bonjour/", defaults={"name"="inconnu"})
     */
    public function index($name): Response
    {
        //$name = $request->get('name');
        /*return $this->render('bonjour/index.html.twig', [
            'controller_name' => 'BonjourController',
            'name' => $name
        ]);*/

        return $this->redirectToRoute("home");
    }
}
