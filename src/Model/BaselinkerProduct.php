<?php

namespace App\Model;

class BaselinkerProduct
{
    public $storage_id;
    public $product_id;
    public $ean;
    public $sku;
    public $name;
    public $quantity;
    public $price_brutto;
    public $price_wholesale_netto;
    public $tax_rate;
    public $weight;
    public $description;
    public $description_extra1;
    public $description_extra2;
    public $description_extra3;
    public $description_extra4;
    public $man_name;
    public $category_id;
    public $images = [];
    public $features = [];

    public function __construct(array $data)
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
}
