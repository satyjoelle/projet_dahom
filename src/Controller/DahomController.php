<?php

namespace App\Controller;

use App\Entity\Dahom;
use App\Entity\Services;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Accueil;

class DahomController extends AbstractController
{
    /**
     * @Route("/",name="accueil")
     */

    public function homepage()
    {
        $em = $this->getDoctrine()->getManager();
        $tabs = $em->getRepository(Accueil::class)->findAll();

        //return new Response('OMG! My first page already! WOOO!');
        return $this->render('dahom/index.html.twig', [
            'tabs'=>$tabs
        ]);
    }

    /**
     * @Route("/about", name="presentation")
     */

    public function aboutus()
    {
        $em = $this->getDoctrine()->getManager();
        $tabsdahom = $em->getRepository(Dahom::class)->findAll();
        //dump($tabsdahom); die();
        //return new Response('OMG! My first page already! WOOO!');
        return $this->render('dahom/about.html.twig', [
            'tabsdahom'=>$tabsdahom
        ]);
    }

    /**
     * @Route("/services", name="prestations")
     */

    public function services()
    {
        $em = $this->getDoctrine()->getManager();
        $tabsservices = $em->getRepository(Services::class)->findAll();
        //dump($tabsservices); die();
        //return new Response('OMG! My first page already! WOOO!');
        return $this->render('dahom/services.html.twig', [
            'tabsservices'=>$tabsservices
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
