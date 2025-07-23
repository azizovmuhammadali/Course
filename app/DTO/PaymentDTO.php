<?php

namespace App\DTO;

class PaymentDTO
{
 public $student_id;
 public $course_list_id;
 public $payment_sum;
 public $lesson_count_paid;
 public $month;
 public $date_at;
    public function __construct($student_id,$course_list_id,$payment_sum,$lesson_count_paid,$month,$date_at)
    {
        $this->student_id = $student_id;
        $this->course_list_id = $course_list_id;
        $this->payment_sum = $payment_sum;
        $this->lesson_count_paid = $lesson_count_paid;
        $this->month = $month;
        $this->date_at = $date_at;
    }
}
