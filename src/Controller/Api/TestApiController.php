<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class TestApiController extends AbstractController
{
    #[Route('/api/test/api', name: 'app_api_test_api')]
    public function index(): JsonResponse
    {
        $jsonData = [
            'message' => 'handle json',
        ];

        return $this->json($jsonData);
    }
}
