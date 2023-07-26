<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PortfolioController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function  homepage()
    {
        return $this->render('portfolio/homepage.html.twig');
    }

    #[Route('/competences', name: 'app_skills')]
    public function skills()
    {
        $skills = [
            ['name' => 'HTML', 'link' => 'html.png'],
            ['name' => 'CSS', 'link' => 'css.png'],
            ['name' => 'Javascript', 'link' => 'js.png'],
            ['name' => 'React', 'link' => 'react.png'],
            ['name' => 'Symfony', 'link' => 'symfony.png'],
        ];

        $skillsIcons = [];

        return $this->render('portfolio/skills.html.twig', [
            'skills' => $skills,
        ]);
    }

    #[Route('/projets', name: 'app_projects')]
    public function projects()
    {
        return $this->render('portfolio/projects.html.twig');
    }
}