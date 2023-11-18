<?php

namespace App\Service;

use App\Model\AkeneoProduct;
use App\Model\BaselinkerProduct;
use App\ServiceInterface\IntegrationInterface;
use Doctrine\ORM\EntityManagerInterface;

class BaselinkerService implements IntegrationInterface
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


        return 0;
    }

    public function fetchData(): array
    {
        return [];
    }

    public function pullData(array $data): bool
    {
        foreach ($data as $key => $value) {
            $akeneoProduct = new AkeneoProduct($value);
            $baselinkerProduct = new BaselinkerProduct($value);
            dump($akeneoProduct,$baselinkerProduct);
            exit;
        }




        

        return 0;
    }
}
