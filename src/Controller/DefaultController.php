<?php

namespace App\Controller;

use App\Repository\BodyRepository;
use App\Repository\CategoryRepository;
use App\Repository\DecisionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(BodyRepository $bodyRepository, CategoryRepository $categoryRepository): Response
    {
        $bodies = $bodyRepository->findAll();
        $allCategories = $categoryRepository->findAll();
        
        return $this->render('homepage.html.twig', [
            'bodies' => $bodies,
            'allCategories' => $allCategories,
        ]);
    }
    
    #[Route('/body/{id}', name: 'body')]
    public function body(int $id, BodyRepository $bodyRepository): Response
    {
        $body = $bodyRepository->find($id);
        
        if (!$body) {
            throw $this->createNotFoundException('Body not found');
        }
        
        $bodies = $bodyRepository->findAll();
        
        return $this->render('homepage.html.twig', [
            'bodies' => $bodies,
            'activeBody' => $body,
        ]);
    }
    
    #[Route('/category/{id}', name: 'category')]
    public function category(int $id, CategoryRepository $categoryRepository, BodyRepository $bodyRepository, DecisionRepository $decisionRepository): Response
    {
        $category = $categoryRepository->find($id);
        
        if (!$category) {
            throw $this->createNotFoundException('Category not found');
        }
        
        $bodies = $bodyRepository->findAll();
        $decisions = $decisionRepository->findBy(['category' => $category], ['year' => 'DESC', 'month' => 'DESC']);
        
        return $this->render('homepage.html.twig', [
            'bodies' => $bodies,
            'activeBody' => $category->getBody(),
            'category' => $category,
            'decisions' => $decisions,
        ]);
    }
}
