<?php

namespace App\Model;

class BaselinkerProduct
{
    protected $storage_id;
    protected $product_id;
    protected $ean;
    protected $sku;
    protected $name;
    protected $quantity;
    protected $price_brutto;
    protected $price_wholesale_netto;
    protected $tax_rate;
    protected $weight;
    protected $description;
    protected $description_extra1;
    protected $description_extra2;
    protected $description_extra3;
    protected $description_extra4;
    protected $man_name;
    protected $category_id;
    protected $images = [];
    protected $features = [];

    public function __construct(array $data)
    {
        $this->setters($data);
    }

    protected function setters(array $data): void
    {
        $this->storage_id = $data['storage_id'] ?? null;
        $this->product_id = $data['product_id'] ?? null;
        $this->ean = $data['ean'] ?? null;
        $this->sku = $data['sku'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->quantity = $data['quantity'] ?? null;
        $this->price_brutto = $data['price_brutto'] ?? null;
        $this->price_wholesale_netto = $data['price_wholesale_netto'] ?? null;
        $this->tax_rate = $data['tax_rate'] ?? null;
        $this->weight = $data['weight'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->description_extra1 = $data['description_extra1'] ?? null;
        $this->description_extra2 = $data['description_extra2'] ?? null;
        $this->description_extra3 = $data['description_extra3'] ?? null;
        $this->description_extra4 = $data['description_extra4'] ?? null;
        $this->man_name = $data['man_name'] ?? null;
        $this->category_id = $data['category_id'] ?? null;

        if (isset($data['images']) && is_array($data['images'])) {
            $this->images = $data['images'];
        }

        if (isset($data['features']) && is_array($data['features'])) {
            $this->features = $data['features'];
        }
    }

        // Getters
        public function getStorageId(): ?string
        {
            return $this->storage_id;
        }
    
        public function getProductId(): ?string
        {
            return $this->product_id;
        }
    
        public function getEan(): ?string
        {
            return $this->ean;
        }
    
        public function getSku(): ?string
        {
            return $this->sku;
        }
    
        public function getName(): ?string
        {
            return $this->name;
        }
    
        public function getQuantity(): ?int
        {
            return $this->quantity;
        }
    
        public function getPriceBrutto(): ?float
        {
            return $this->price_brutto;
        }
    
        public function getPriceWholesaleNetto(): ?float
        {
            return $this->price_wholesale_netto;
        }
    
        public function getTaxRate(): ?float
        {
            return $this->tax_rate;
        }
    
        public function getWeight(): ?float
        {
            return $this->weight;
        }
    
        public function getDescription(): ?string
        {
            return $this->description;
        }
    
        public function getDescriptionExtra1(): ?string
        {
            return $this->description_extra1;
        }
    
        public function getDescriptionExtra2(): ?string
        {
            return $this->description_extra2;
        }
    
        public function getDescriptionExtra3(): ?string
        {
            return $this->description_extra3;
        }
    
        public function getDescriptionExtra4(): ?string
        {
            return $this->description_extra4;
        }
    
        public function getManName(): ?string
        {
            return $this->man_name;
        }
    
        public function getCategoryId(): ?int
        {
            return $this->category_id;
        }
    
        public function getImages(): array
        {
            return $this->images;
        }
    
        public function getFeatures(): array
        {
            return $this->features;
        }
    
        // Setters
        public function setStorageId(?string $storageId): void
        {
            $this->storage_id = $storageId;
        }
    
        public function setProductId(?string $productId): void
        {
            $this->product_id = $productId;
        }
    
        public function setEan(?string $ean): void
        {
            $this->ean = $ean;
        }
    
        public function setSku(?string $sku): void
        {
            $this->sku = $sku;
        }
    
        public function setName(?string $name): void
        {
            $this->name = $name;
        }
    
        public function setQuantity(?int $quantity): void
        {
            $this->quantity = $quantity;
        }
    
        public function setPriceBrutto(?float $priceBrutto): void
        {
            $this->price_brutto = $priceBrutto;
        }
    
        public function setPriceWholesaleNetto(?float $priceWholesaleNetto): void
        {
            $this->price_wholesale_netto = $priceWholesaleNetto;
        }
    
        public function setTaxRate(?float $taxRate): void
        {
            $this->tax_rate = $taxRate;
        }
    
        public function setWeight(?float $weight): void
        {
            $this->weight = $weight;
        }
    
        public function setDescription(?string $description): void
        {
            $this->description = $description;
        }
    
        public function setDescriptionExtra1(?string $descriptionExtra1): void
        {
            $this->description_extra1 = $descriptionExtra1;
        }
    
        public function setDescriptionExtra2(?string $descriptionExtra2): void
        {
            $this->description_extra2 = $descriptionExtra2;
        }
    
        public function setDescriptionExtra3(?string $descriptionExtra3): void
        {
            $this->description_extra3 = $descriptionExtra3;
        }
    
        public function setDescriptionExtra4(?string $descriptionExtra4): void
        {
            $this->description_extra4 = $descriptionExtra4;
        }
    
        public function setManName(?string $manName): void
        {
            $this->man_name = $manName;
        }
    
        public function setCategoryId(?int $categoryId): void
        {
            $this->category_id = $categoryId;
        }
    
        public function setImages(array $images): void
        {
            $this->images = $images;
        }
    
        public function setFeatures(array $features): void
        {
            $this->features = $features;
        }
}
