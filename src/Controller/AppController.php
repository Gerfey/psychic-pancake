<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/api/v1/welcome', name: 'index')]
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome!',
            'time' => time()
        ]);
    }

    #[Route('/healthz', name: 'healthz')]
    public function healthz(): Response
    {
        return $this->json([]);
    }
}
