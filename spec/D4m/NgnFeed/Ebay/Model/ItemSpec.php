<?php

namespace spec\D4m\NgnFeed\Ebay\Model;

use PhpSpec\ObjectBehavior;

class ItemSpec extends ObjectBehavior
{
    function it_is_iniatializable()
    {
        $this->shouldHaveType('D4m\NgnFeed\Ebay\Model\Item');
    }

    function it_should_return_price_when_set()
    {
        $price = 100.20;
        $this->setBuyItNowPrice($price);
        $this->getBuyItNowPrice()->shouldReturn($price);
    }

    /**
     * @param D4m\NgnFeed\Ebay\Model\Category $primaryCategory
     */
    function it_should_return_category_when_set($primaryCategory)
    {
        $this->setPrimaryCategory($primaryCategory);
        $this->getPrimaryCategory()->shouldHaveType($primaryCategory);
    }
}