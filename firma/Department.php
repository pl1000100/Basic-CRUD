<?php
include "Firm.php";
include "Workery.php";

abstract class Department extends Firm
{
    public $departmentName;
    public $wages;
    public $workers = [];

    public function addWorker(Workery $worker)
    {
        $this->workers[sizeof($this->workers)] = $worker;
    }

    /**
     * @return array
     */

    public function getWorkers()
    {
        return $this->workers;
    }
    /**
     * @return mixed
     */
    public function getDepartmentName()
    {
        return $this->departmentName;
    }

    /**
     * @return mixed
     */
    public function getWages()
    {
        return $this->wages;
    }
}