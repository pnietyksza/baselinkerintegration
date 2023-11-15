<?php

namespace App\ServiceInterface;

interface IntegrationInterface
{
    public function isAuthorization(): bool;

    public function authorization(): bool;

    public function fetchData(): array;

    public function pullData(array $data): bool;
}
