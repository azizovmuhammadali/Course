<?php

namespace App\Interfaces\Services;

interface ActiveStudentServiceInterface
{
      public function create($activestudentDTO);
    public function update($id,$activestudentDTO);
    public function delete($id);
}
