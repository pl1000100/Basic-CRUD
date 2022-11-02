<?php

class Workery
{
    public $name;
    public $surname;

    /**
     * @param $name
     * @param $surname
     */
    function __construct($name, $surname)
    {

        $this->name = $name;
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }
}