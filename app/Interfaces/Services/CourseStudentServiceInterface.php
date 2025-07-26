<?php

namespace App\Interfaces\Services;

interface CourseStudentServiceInterface
{
     public function create($coursestudentDTO);
    public function update($id,$coursestudentDTO);
    public function delete($id);
}
