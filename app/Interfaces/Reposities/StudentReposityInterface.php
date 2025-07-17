<?php

namespace App\Interfaces\Reposities;

interface StudentReposityInterface
{
   public function create($data);
   public function updated($id,$data);
   public function delete($id);
}
