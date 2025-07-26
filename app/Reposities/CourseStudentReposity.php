<?php

namespace App\Reposities;

use App\Interfaces\Reposities\CourseStudentReposityInterface;
use App\Models\CourseStudent;

class CourseStudentReposity implements CourseStudentReposityInterface
{
   public function create($data){
   $cs = new CourseStudent();
   $cs->student_id = $data['student_id'];
   $cs->course_list_id = $data['course_list_id'];
   $cs->teacher_id = $data['teacher_id'];
   $cs->homework_status = $data['homework_status'] ?? $cs->homework_status;
   $cs->month = $data['month'];
   $cs->date_at = $data['date_at'];
   $cs->payment_status = $data['payment_status'] ?? $cs->payment_status;
   $cs->save();
   return $cs;
   }
   public function update($id, $data){
    $cs = CourseStudent::findorFail($id);
    $cs->student_id = $data['student_id'] ?? $cs->student_id;
    $cs->course_list_id = $data['course_list_id'] ?? $cs->course_list_id;
    $cs->teacher_id = $data['teacher_id'] ?? $cs->teacher_id;
    $cs->homework_status = $data['homework_status'] ?? $cs->homework_status;
    $cs->month = $data['month'] ?? $cs->month;
    $cs->date_at = $data['date_at'] ?? $cs->date_at;
    $cs->payment_status = $data['payment_status'] ?? $cs->payment_status;
     $cs->save();
   return $cs;
   }
   public function delete($id){
    $cs = CourseStudent::findorFail($id);
    $cs->delete();
   }
}
