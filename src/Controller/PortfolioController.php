<?php

/* This is the main controller of this app.
    It's where we create the methods to display the pages
*/

namespace App\Controller;

/* Use of librairies */
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/* Init class */
class PortfolioController extends AbstractController
{
    #[Route('/', name: 'app_homepage')] /* This is the path for routing*/
    public function  homepage()
    {
        /* Shows homepage's twig */
        return $this->render('portfolio/homepage.html.twig');
    }

    #[Route('/competences', name: 'app_skills')]
    public function skills()
    {
        /* These are my skills in a array to display */
        $skills = [
            ['name' => 'HTML', 'link' => 'images/skills/html.svg'],
            ['name' => 'CSS', 'link' => 'images/skills/css.svg'],
            ['name' => 'Javascript', 'link' => 'images/skills/javascript.svg'],
            ['name' => 'React', 'link' => 'images/skills/react.svg'],
            ['name' => 'Symfony', 'link' => 'images/skills/symfony.svg'],
        ];

        /* Shows homepage's twig with skills to display it */
        return $this->render('portfolio/skills.html.twig', [
            'skills' => $skills,
        ]);
    }

    #[Route('/projets', name: 'app_projects')]
    public function projects()
    {
        /* Shows projects twig */
        return $this->render('portfolio/projects.html.twig');
    }
}