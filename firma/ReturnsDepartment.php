<?php

class ReturnsDepartment extends Department
{
    public $departmentName = "dział zwrotów";
    public $wages = 2000;
    public function __construct($firmName)
    {
        parent::__construct($firmName);
    }
}