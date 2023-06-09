<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('default/index.html.twig');
    }
    /**
 * @Route("/about", name="about")
 */
public function about()
{
    return $this->render('default/about.html.twig');
}

/**
 * @Route("/portfolio", name="portfolio")
 */
public function portfolio()
{
    return $this->render('default/portfolio.html.twig');
}

}