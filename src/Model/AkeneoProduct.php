<?php

namespace App\Model;

class AkeneoProduct
{
    public $uuid;
    public $identifier;
    public $enabled;
    public $manufacturer;
    public $ean;
    public $erpName;
    public $tradeName;
    public $nameRequiredByLaw;
    public $created;
    public $updated;
    public $associations;

    public function __construct($data)
    {
        $this->uuid = $data['uuid'];
        $this->identifier = $data['identifier'];
        $this->enabled = $data['enabled'];
        $this->manufacturer = $data['values']['manufacturer'][0]['data'];
        $this->ean = $data['values']['ean'][0]['data'];
        if (isset($data['values']['erp_name'][0]['data'])) {
            $this->erpName = $data['values']['erp_name'][0]['data'];
        }
        $this->tradeName = $data['values']['Trade_name'][0]['data'];
        $this->nameRequiredByLaw = $data['values']['Name_required_by_law'][0]['data'];
        $this->created = $data['created'];
        $this->updated = $data['updated'];
        $this->associations = $data['associations'];
    }
}
