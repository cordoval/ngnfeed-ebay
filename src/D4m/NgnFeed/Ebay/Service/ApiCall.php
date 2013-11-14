<?php

namespace D4m\NgnFeed\Ebay\Service;

interface ApiCall
{
    public function setSession($session);
    public function execute();
}