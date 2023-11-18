<?php

namespace App\Adapters;

use App\Model\AkeneoProduct;
use App\Model\BaselinkerProduct;
use InvalidArgumentException;

class AkeneoToBaselinkerProductAdapter extends BaselinkerProduct
{
    public function __construct(
        array $data = null,
        AkeneoProduct $akeneoProduct = null,
    ) {
        if ($akeneoProduct !== null) {

            $this->settersFromObject($akeneoProduct);
        } elseif ($data !== null) {

            $this->setters($data);
        } else {

            throw new InvalidArgumentException('No data to create BaselinkerProduct.');
        }
    }

    protected function settersFromObject(AkeneoProduct $akeneoProduct): void
    {
        $this->setStorageId($akeneoProduct->getUuid());
        $this->setProductId($akeneoProduct->getIdentifier());
        $this->setEan($akeneoProduct->getEan());
        $this->setSku($akeneoProduct->getIdentifier());
        $this->setName($akeneoProduct->getTradeName());
        $this->setQuantity(0);
        $this->setPriceBrutto(0.0);
        $this->setPriceWholesaleNetto(0.0);
        $this->setTaxRate(23.0);
        $this->setWeight(0.0);
        $this->setDescription($akeneoProduct->getErpName());
        $this->setDescriptionExtra1($akeneoProduct->getNameRequiredByLaw());

        if (!empty($akeneoProduct->getAssociations()['images'])) {
            $this->setImages($akeneoProduct->getAssociations()['images']);
        }
    }
}
