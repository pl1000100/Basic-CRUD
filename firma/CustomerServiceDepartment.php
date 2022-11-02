<?php

class CustomerServiceDepartment extends Department
{
    public $departmentName = "dział obsługi klienta";
    public $wages = 1500;
    public function __construct($firmName)
    {
        parent::__construct($firmName);
    }
}