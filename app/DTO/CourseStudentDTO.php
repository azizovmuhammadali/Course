<?php

namespace App\DTO;

class CourseStudentDTO
{
   public $student_id;
   public $course_list_id;
   public $teacher_id;
   public $homework_status; 
   public $month;
   public $date_at;
   public $payment_status;
    public function __construct($student_id,$course_list_id,$teacher_id,$homework_status,$month,$date_at,$payment_status)
    {
        $this->student_id = $student_id;
        $this->course_list_id = $course_list_id;
        $this->teacher_id = $teacher_id;
        $this->homework_status = $homework_status;
        $this->month = $month;
        $this->date_at = $date_at;
        $this->payment_status = $payment_status;
    }
}
