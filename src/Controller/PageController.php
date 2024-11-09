<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{

    #[Route('/', name: 'home_page')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig');
    }



    #[Route('/contact', name: 'contact_page')]
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig');
    }

    #[Route('/about_us', name: 'about_page')]
    public function AboutUs(): Response
    {
        return $this->render('page/about.html.twig');
    }

    
    #[Route('/terms', name: 'terms_page')]
    public function Terms(): Response
    {
        return $this->render('page/terms.html.twig');
    }
    
}
