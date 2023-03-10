<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FadilouController extends AbstractController
{
    #[Route('/', name: 'app_Fadilou')]
    public function index(): Response
    {
        return $this->render('home.html.twig',[
        'controller_name' => 'FadilouController',
    ]);
            
    }

    #[Route('/moncv', name: 'app_Fadilou1')]
    public function cV(): Response
    {
        return $this->render('moncv.html.twig',[
        'controller_name' => 'FadilouController',
    ]);
    }
   
    #[Route('/formulaire_inscription', name: 'app_Fadilou2')]
    public function inscription(): Response
    {
        return $this->render('formulaire_inscription.html.twig',[
        'controller_name' => 'FadilouController',
    ]);
    }
    #[Route('/contact', name: 'app_Fadilou3')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig',[
        'controller_name' => 'FadilouController',
    ]);
    }
    #[Route('/mon_portfolio', name: 'app_Fadilou4')]
    public function portfolio(): Response
    {
        return $this->render('portfolio.html.twig',[
        'controller_name' => 'FadilouController',
    ]);
    }

}