<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use function compact;

class TestLoginController extends AbstractController
{
    public function index()
    {
        $user = $this->getUser();

        return $this->render('test_login/index.html.twig', compact('user'));
    }
}
