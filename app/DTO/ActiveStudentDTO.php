<?php

namespace App\DTO;

class ActiveStudentDTO
{
 public $student_id;
 public $course_list_id;
 public $payment_amount;
 public $lesson_paid;
 public $lesson_passed;
 public $lesson_debt_count;
 public $lesson_debt_sum;
 public $month;
    public function __construct($student_id,$course_list_id,$payment_amount,$lesson_paid,$lesson_passed,$lesson_debt_count,$lesson_debt_sum,$month)
    {
        $this->student_id = $student_id;
        $this->course_list_id = $course_list_id;
        $this->payment_amount = $payment_amount;
        $this->lesson_paid = $lesson_paid;
        $this->lesson_passed = $lesson_passed;
        $this->lesson_debt_count = $lesson_debt_count;
        $this->lesson_debt_sum = $lesson_debt_sum;
        $this->month = $month;
    }
}
