<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuackController extends AbstractController
{
    /**
     * @Route("/quack", name="quack")
     */
    public function index(): Response
    {
        return $this->render('quack/index.html.twig', [
            'controller_name' => 'QuackController',
        ]);
    }
    public function quackList() {

    }
    public function quackCreate() {

    }
    public function quackModify() {

    }
    public function quackDelete() {

    }
}
