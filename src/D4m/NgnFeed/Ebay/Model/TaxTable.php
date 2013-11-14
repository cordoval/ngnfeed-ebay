<?php

namespace D4m\NgnFeed\Ebay\Model;

class TaxTable extends Entity
{
    protected $taxJurisdiction;

    /**
     * @param mixed $taxJurisdiction
     */
    public function setTaxJurisdiction($taxJurisdiction)
    {
        $this->taxJurisdiction = $taxJurisdiction;
    }

    /**
     * @return mixed
     */
    public function getTaxJurisdiction()
    {
        return $this->taxJurisdiction;
    }
}