<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DahomController extends AbstractController
{
    /**
     * @Route("/",name="accueil")
     */

    public function homepage()
    {
        //return new Response('OMG! My first page already! WOOO!');
        return $this->render('dahom/index.html.twig', [
        ]);
    }

    /**
     * @Route("/about", name="presentation")
     */

    public function aboutus()
    {
        //return new Response('OMG! My first page already! WOOO!');
        return $this->render('dahom/about.html.twig', [
        ]);
    }

    /**
     * @Route("/services", name="prestations")
     */

    public function services()
    {
        //return new Response('OMG! My first page already! WOOO!');
        return $this->render('dahom/services.html.twig', [
        ]);
    }

    /**
     * @Route("/reglementation", name="legislation")
     */

    public function reglementation()
    {
        //return new Response('OMG! My first page already! WOOO!');
        return $this->render('dahom/reglementation.html.twig', [
        ]);
    }

    /**
     * @Route("/recrutement", name="embauche")
     */

    public function recrutement()
    {
        //return new Response('OMG! My first page already! WOOO!');
        return $this->render('dahom/recrutement.html.twig', [
        ]);
    }

    /**
     * @Route("/contact", name="adresse")
     */

    public function contact()
    {
        //return new Response('OMG! My first page already! WOOO!');
        return $this->render('dahom/contact.html.twig', [
        ]);
    }

}
