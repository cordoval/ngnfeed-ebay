<?php

namespace D4m\NgnFeed\Ebay\Service;

class AddItem extends BaseApiCall
{
    protected $options;

    public function __construct($options)
    {
        $this->initializeParameters('AddItem');
        $this->options = $options;
    }
}