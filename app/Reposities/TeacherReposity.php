<?php

namespace App\Reposities;

use App\Models\Teacher;
use App\Interfaces\Reposities\TeacherReposityInterface;

class TeacherReposity implements TeacherReposityInterface
{

   public function create($data)
   {
     $teacher = new Teacher();
     $teacher->name = $data['name'];
     $teacher->description = $data['description'];
     $teacher->phone = $data['phone'];
     $teacher->save();
     return $teacher;
   }
   public function updated($id, $data){
     $teacher = Teacher::findOrFail($id);
     $teacher->name = $data['name'] ?? $teacher->name;
     $teacher->description = $data['description'] ?? $teacher->description;
     $teacher->phone = $data['phone'] ?? $teacher->phone;
     $teacher->save();
     return $teacher;
   }
   public function destroy($id){
     $teacher = Teacher::findOrFail($id);
     $teacher->delete();
   }
}

