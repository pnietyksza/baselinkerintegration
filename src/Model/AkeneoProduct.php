<?php

namespace App\Model;

class AkeneoProduct
{
    protected $uuid;
    protected $identifier;
    protected $enabled;
    protected $manufacturer;
    protected $ean;
    protected $erpName;
    protected $tradeName;
    protected $nameRequiredByLaw;
    protected $created;
    protected $updated;
    protected $associations;

    public function __construct(array $data)
    {
        $this->setters($data);
    }

    protected function setters(array $data): void
    {
        $this->uuid = $data['uuid'] ?? null;
        $this->identifier = $data['identifier'] ?? null;
        $this->enabled = $data['enabled'] ?? null;
        $this->manufacturer = $data['values']['manufacturer'][0]['data'] ?? null;
        $this->ean = $data['values']['ean'][0]['data'] ?? null;
        $this->erpName = $data['values']['erp_name'][0]['data'] ?? null;
        $this->tradeName = $data['values']['Trade_name'][0]['data'] ?? null;
        $this->nameRequiredByLaw = $data['values']['Name_required_by_law'][0]['data'] ?? null;
        $this->created = $data['created'] ?? null;
        $this->updated = $data['updated'] ?? null;
        $this->associations = $data['associations'] ?? null;
    }

    // Getters
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function getErpName(): ?string
    {
        return $this->erpName;
    }

    public function getTradeName(): ?string
    {
        return $this->tradeName;
    }

    public function getNameRequiredByLaw(): ?string
    {
        return $this->nameRequiredByLaw;
    }

    public function getCreated(): ?string
    {
        return $this->created;
    }

    public function getUpdated(): ?string
    {
        return $this->updated;
    }

    public function getAssociations(): ?array
    {
        return $this->associations;
    }

    // Setters
    public function setUuid(?string $uuid): void
    {
        $this->uuid = $uuid;
    }

    public function setIdentifier(?string $identifier): void
    {
        $this->identifier = $identifier;
    }

    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    public function setManufacturer(?string $manufacturer): void
    {
        $this->manufacturer = $manufacturer;
    }

    public function setEan(?string $ean): void
    {
        $this->ean = $ean;
    }

    public function setErpName(?string $erpName): void
    {
        $this->erpName = $erpName;
    }

    public function setTradeName(?string $tradeName): void
    {
        $this->tradeName = $tradeName;
    }

    public function setNameRequiredByLaw(?string $nameRequiredByLaw): void
    {
        $this->nameRequiredByLaw = $nameRequiredByLaw;
    }

    public function setCreated(?string $created): void
    {
        $this->created = $created;
    }

    public function setUpdated(?string $updated): void
    {
        $this->updated = $updated;
    }

    public function setAssociations(?array $associations): void
    {
        $this->associations = $associations;
    }
}
