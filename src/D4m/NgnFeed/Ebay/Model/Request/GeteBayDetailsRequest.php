<?php

namespace D4m\NgnFeed\Ebay\Model\Request;


class GeteBayDetailsRequest extends BaseRequest
{
    protected $detailName;

    /**
     * @param mixed $detailName
     */
    public function setDetailName($detailName)
    {
        $this->detailName = $detailName;
    }

    /**
     * @return mixed
     */
    public function getDetailName()
    {
        return $this->detailName;
    }
}