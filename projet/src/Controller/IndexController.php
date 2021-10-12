<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $nextEvent = [
            "resume" => "blabla"
        ];


        $passedEvents = [
            ["id" => 1 , "resume" => "blabla" , "date" => "01/04/2019"] , ["id" => 2,"resume" => "bloblo", "date"=> "14/09/2020"]
        ];

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'nextEvent' => $nextEvent,
            'passedEvents' => $passedEvents
        ]);
    }
}
