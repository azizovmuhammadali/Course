<?php

namespace App\DTO;

class StudentDTO
{
public $name;
public $description;
public $phone;
public $status;
    public function __construct($name,$description,$phone,$status)
    {
        $this->name = $name;
        $this->description = $description;
        $this->phone = $phone;
        $this->status = $status;
    }
}
