<?php

class Firm
{
    public $firmName;

    function __construct($firmName)
    {
        $this->firmName = $firmName;
    }

    /**
     * @return mixed
     */
    public function getFirmName()
    {
        return $this->firmName;
    }
}