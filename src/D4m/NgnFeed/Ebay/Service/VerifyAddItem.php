<?php

namespace D4m\NgnFeed\Ebay\Service;

class VerifyAddItem extends BaseApiCall
{
    protected $options;

    public function __construct($options)
    {
        $this->initializeParameters('VerifyAddItem');
        $this->options = $options;
    }
}