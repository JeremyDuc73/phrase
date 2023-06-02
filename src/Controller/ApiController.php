<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route('/api/coucou', name: 'app_api_coucou', methods: ['GET'])]
    public function coucou(): Response
    {
        return $this->json('coucou', 200);
    }

    #[Route('/test', name: 'app_api_test', methods: ['GET'])]
    public function test(): Response
    {
        return $this->json("ça marche alors que n'est pas connecté", 200);
    }
}
