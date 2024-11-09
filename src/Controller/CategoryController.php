<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

class CategoryController extends AbstractController
{
    #[Route('/category/{id}', name: 'app_category_view_by_id' , requirements:["id" => Requirement::DIGITS])]
    public function showCategoryById(int $id): Response
    {
        return $this->render('category/index.html.twig', [
            'param' => $id,
        ]);
    }


    #[Route('/category/{slug}', name: 'app_category_view_by_slug' ,  requirements: ['slug' => '[a-zA-Z0-9\-]+'])]
    public function showCategoryBySlug($slug): Response
    {
        return $this->render('category/index.html.twig', [
            'param' => $slug,
        ]);
    }
}
