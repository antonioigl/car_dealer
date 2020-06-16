<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use function compact;
use function dd;
use function var_dump;

class WelcomeController extends AbstractController
{

    public function index()
    {
        $user = $this->getUser();
        return $this->render('welcome/index.html.twig', compact('user'));
    }
}
