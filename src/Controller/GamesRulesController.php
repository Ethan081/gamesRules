<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GamesRulesController extends AbstractController
{
    /**
     * @Route("/", name="games_rules")
     */
    public function index()
    {
        return $this->render('games_rules/index.html.twig', [
            'controller_name' => 'GamesRulesController',
        ]);
    }
}
