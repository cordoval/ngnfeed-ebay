<?php

namespace D4m\NgnFeed\Ebay\Service;

class SimpleApiCall extends BaseApiCall
{
    protected $options;

    public function __construct($serviceName, $options)
    {
        $this->initializeParameters($serviceName);
        $this->options = $options;
    }
}