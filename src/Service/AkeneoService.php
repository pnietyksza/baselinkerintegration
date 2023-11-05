<?php

namespace App\Service;

use App\ServiceInterface\IntegrationInterface;
use GuzzleHttp\Client as Client;

class AkeneoService implements IntegrationInterface
{
    public function __construct()
    {
    }

    public function isAuthorization(): bool
    {
        return 0;
    }

    public function authorization(): bool
    {
        $client = new Client();

        $contentType = "application/json";
        $authorization = "";

        $grantType = "";
        $username = "";
        $password = "";
        $url = "";

        $headers = [
            "Content-Type" => $contentType,
            "Authorization" => $authorization,
        ];

        $formParams = [
            "grant_type" => $grantType,
            "username" => $username,
            "password" => $password
        ];

        $response = $client->request(
            "POST",
            $url,
            [
                "headers" => $headers,
                "json" => $formParams,
            ]
        );


        $responseBody = $response->getBody()->getContents();
        $httpStatus = $response->getStatusCode();
        
        echo "Status HTTP: $httpStatus\n";
        echo "Odpowiedź:\n";
        echo $responseBody;
        
        exit;

        return 0;
    }

    public function fetchData(): array
    {
        return [];
    }

    public function pullData(array $data): bool
    {
        return 0;
    }
}
