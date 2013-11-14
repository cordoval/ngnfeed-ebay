<?php

namespace D4m\NgnFeed\Ebay\Event;

use Symfony\Component\EventDispatcher\Event;

class ResponseEvent extends Event
{
    private $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function getResponse()
    {
        return $this->response;
    }
}