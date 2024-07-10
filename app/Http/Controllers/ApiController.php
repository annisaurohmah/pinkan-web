<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleCloudService;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    protected $googleCloudService;

    public function __construct(GoogleCloudService $googleCloudService)
    {
        $this->googleCloudService = $googleCloudService;
    }

    public function callCloudRunApi()
    {
        $token = $this->googleCloudService->getIdentityToken();
        $client = new Client();

        $response = $client->request('GET', 'https://pinkan-be-pfedqrwq5q-uc.a.run.app', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
        ]);

        return $response->getBody();
    }
}
