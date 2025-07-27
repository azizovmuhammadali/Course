<?php

namespace App\Reposities;

use App\Interfaces\Reposities\ActiveStudentReposityInterface;
use App\Models\ActiveStudent;

class ActiveStudentReposity implements ActiveStudentReposityInterface
{
  public function create($data){
  $activestudent = new ActiveStudent();
  $activestudent->student_id = $data['student_id'];
  $activestudent->course_list_id = $data['course_list_id'];
  $activestudent->payment_amount = $data['payment_amount'];
  $activestudent->lesson_paid = $data['lesson_paid'];
  $activestudent->lesson_passed = $data['lesson_passed'];
  $activestudent->lesson_debt_count = $data['lesson_debt_count'];
  $activestudent->lesson_debt_sum = $data['lesson_debt_sum'];
  $activestudent->month = $data['month'];
  $activestudent->save();
  return $activestudent;
  }
  public function update($id, $data){
  $activestudent = ActiveStudent::findOrFail($id);
  $activestudent->student_id = $data['student_id'] ?? $activestudent->student_id;
  $activestudent->course_list_id = $data['course_list_id'] ?? $activestudent->course_list_id;
  $activestudent->payment_amount = $data['payment_amount'] ?? $activestudent->payment_amount;
  $activestudent->lesson_paid = $data['lesson_paid'] ?? $activestudent->lesson_paid;
  $activestudent->lesson_passed = $data['lesson_passed'] ?? $activestudent->lesson_passed;
  $activestudent->lesson_debt_count = $data['lesson_debt_count'] ?? $activestudent->lesson_debt_count;
  $activestudent->lesson_debt_sum = $data['lesson_debt_sum'] ?? $activestudent->lesson_debt_sum;
  $activestudent->month = $data['month'] ?? $activestudent->month;
  $activestudent->save();
  return $activestudent;
  }
  public function delete($id){
    $activestudent = ActiveStudent::findOrFail($id);
    $activestudent->delete();
  }

}

