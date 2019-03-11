<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DahomController extends AbstractController
{
    /**
     * @Route("/")
     */

    public function homepage()
    {
        //return new Response('OMG! My first page already! WOOO!');
        return $this->render('dahom/index.html.twig', [
        ]);
    }

    public function aboutus()
    {
        //return new Response('OMG! My first page already! WOOO!');
        return $this->render('dahom/about.html.twig', [
        ]);
    }

}
