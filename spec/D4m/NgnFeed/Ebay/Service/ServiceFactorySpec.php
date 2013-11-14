<?php

namespace spec\D4m\NgnFeed\Ebay\Service;

use PhpSpec\ObjectBehavior;

class ServiceFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('D4m\NgnFeed\Ebay\Service\ServiceFactory');
    }

    /**
     * @param D4m\NgnFeed\Ebay\Service\AddItem $addItem
     */
    function it_should_return_add_item_service($addItem)
    {
        $this->getService('AddItem')->shouldImplement('D4m\NgnFeed\Ebay\Service\ApiCall');
        $this->getService('AddItem')->shouldHaveType('D4m\NgnFeed\Ebay\Service\AddItem');
    }
}