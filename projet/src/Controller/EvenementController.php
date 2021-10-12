<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementController extends AbstractController
{
    /**
     * @Route("detailevt/{id}", name="detailevt")
     */
    public function detailevt($id): Response
    {
        return $this->render('evenement/detailevt.html.twig', [
        ]);
    }

    /**
     * @Route("detailevtpass/{id}", name="detailevtpass")
     */
    public function detailevtpass($id): Response
    {
        return $this->render('evenement/detailevtpass.html.twig', [
        ]);
    }

    /**
     * @Route("detailprop/{id}", name="detailprop")
     */
    public function detailprop($id): Response
    {
        return $this->render('evenement/detailprop.html.twig', [
        ]);
    }

    /**
     * @Route("detailsession/{id}", name="detailsession")
     */
    public function detailsession($id): Response
    {
        return $this->render('evenement/detailsession.html.twig', [
        ]);
    }

    /**
     * @Route("add", name="add")
     */
    public function add(): Response
    {
        return $this->render('evenement/add.html.twig', [
        ]);
    }

    /**
     * @Route("addprop", name="addprop")
     */
    public function addprop(): Response
    {
        return $this->render('evenement/addprop.html.twig', [
        ]);
    }
}
