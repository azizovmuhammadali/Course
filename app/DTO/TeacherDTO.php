<?php

namespace App\DTO;

class TeacherDTO
{
public $name;
public $description;
public $phone;
    public function __construct($name,$description,$phone)
    {
        $this->name = $name;
        $this->description = $description;
        $this->phone = $phone;
    }
}
