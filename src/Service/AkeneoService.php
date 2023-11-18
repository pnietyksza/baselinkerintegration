<?php

namespace App\Service;

use App\Entity\AuthorizationData;
use App\ServiceInterface\IntegrationInterface;
use Doctrine\ORM\EntityManagerInterface;
use GuzzleHttp\Client as Client;

class AkeneoService implements IntegrationInterface
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
        $this->entityManager = $entityManager;
    }

    public function isAuthorization(): bool
    {
        return 0;
    }

    public function authorization(): bool
    {
        $authorizationRepository = $this->entityManager->getRepository(AuthorizationData::class);

        $data = $authorizationRepository->findOneBy([], ['id' => 'ASC']);

        $clientId = $data->getClientId();
        $secret = $data->getSecret();
        $authorization = 'Basic ' . base64_encode($clientId . ':' . $secret);
        $username = $data->getUsername();
        $password = $data->getPassword();
        $contentType = 'application/json';
        $url = '';
        $grantType = 'password';

        $client = new Client();

        $headers = [
            'Content-Type' => $contentType,
            'Authorization' => $authorization,
        ];

        $formParams = [
            'grant_type' => $grantType,
            'username' => $username,
            'password' => $password
        ];

        $response = $client->request(
            'POST',
            $url,
            [
                'headers' => $headers,
                'json' => $formParams,
            ]
        );

        $responseBody = $response->getBody()->getContents();
        $httpStatus = $response->getStatusCode();
        $decodedResponse = json_decode($responseBody);

        if ($httpStatus === 200) {
            try {
                $this->entityManager->beginTransaction();

                $data->setToken($decodedResponse->access_token);
                $this->entityManager->persist($data);
                $this->entityManager->flush();

                $this->entityManager->commit();
                return 1;
            } catch (\Exception $e) {
                $this->entityManager->rollback();
                echo 'Error: ' . $e->getMessage();
                return 0;
            }
        } else {
            echo 'Httpcode is wrong';
            return 0;
        }
    }

    public function fetchData(): array
    {
        $authorizationRepository = $this->entityManager->getRepository(AuthorizationData::class);
        $data = $authorizationRepository->findOneBy([], ['id' => 'ASC']);
        $token = $data->getToken();
        $url = '';
        $client = new Client();
        $dataBaselinker = [];

        try {
            $response = $client->request(
                'GET',
                $url,
                [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $token,
                    ]
                ]
            );
        } catch (\Exception $e) {
            exit($e->getMessage());
        }

        $result = json_decode($response->getBody(), true);

        $products = $result['_embedded']['items'];

        return $products;
    }

    public function pullData(array $data): bool
    {
        return 0;
    }
}
