<?php

namespace App\DTO;

class CourseListDTO
{
  public $name;
  public $price;
  public $period;
    public function __construct($name,$price,$period)
    {
        $this->name = $name;
        $this->price = $price;
        $this->period = $period;
    }
}
