<?php

namespace App\Reposities;

use App\Interfaces\Reposities\CourseListReposityInterface;
use App\Models\CourseList;

class CourseListReposity implements CourseListReposityInterface
{

    public function AllCourses(){
  $courses = CourseList::all();
  return $courses;
    } 
    public function create($data){
   $course = new CourseList();
   $course->name = $data['name'];
   $course->price = $data['price'];
   $course->period = $data['period'] ?? $course->period;
   $course->save();
   return $course;
    }
    public function getById($id){
   $course = CourseList::find($id);
   return $course;
    }
    public function findById($id, $data){
     $course = CourseList::find($id);
     $course->name = $data['name']  ?? $course->name;
     $course->price = $data['price'] ?? $course->price;
     $course->period = $data['period'] ?? $course->period;
     $course->save();
     return $course;
    }
    public function delete($id){
         $course = CourseList::find($id);
         $course->delete();
    }
}
