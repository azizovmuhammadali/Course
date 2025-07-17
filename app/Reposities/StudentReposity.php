<?php

namespace App\Reposities;

use App\Interfaces\Reposities\StudentReposityInterface;
use App\Models\Student;

class StudentReposity implements StudentReposityInterface
{
    public function create($data){
    $student = new Student();
    $student->name = $data['name'];
    $student->description = $data['description'];
    $student->phone = $data['phone'];
    $student->status = $data['status'];
    $student->save();
    return $student;
    }
    public function updated($id, $data)
    {
       $student = Student::findOrFail($id);
    $student->name = $data['name'] ?? $student->name;
    $student->description = $data['description'] ?? $student->description;
    $student->phone = $data['phone'] ?? $student->phone;
    $student->status = $data['status'] ?? $student->status;
    $student->save();
    return $student;
    }
    public function delete($id){
      $student = Student::findOrFail($id);
      $student->delete();
    }

}
