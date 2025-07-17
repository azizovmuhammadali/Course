<?php

namespace App\Interfaces\Services;

interface StudentServiceInterface
{
   public function store($studentDTO);
   public function update($id,$studentDTO);
   public function destroy($id);
}
