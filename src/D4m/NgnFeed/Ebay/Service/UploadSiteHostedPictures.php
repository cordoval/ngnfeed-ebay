<?php

namespace D4m\NgnFeed\Ebay\Service;

class UploadSiteHostedPictures extends BaseApiCall
{
    protected $options;

    public function __construct($options)
    {
        $this->initializeParameters('UploadSiteHostedPictures');
        $this->options = $options;
    }
}