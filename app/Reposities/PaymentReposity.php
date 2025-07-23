<?php

namespace App\Reposities;

use App\Interfaces\Reposities\PaymentReposityInterface;
use App\Models\Payment;

class PaymentReposity implements PaymentReposityInterface
{
     public function create($data){
   $payment = new Payment();
   $payment->student_id = $data['student_id'];
   $payment->course_list_id = $data['course_list_id'];
   $payment->payment_sum = $data['payment_sum'];
   $payment->lesson_count_paid = $data['lesson_count_paid'];
   $payment->month = $data['month'];
   $payment->date_at = $data['date_at'];
   $payment->save();
   return $payment;
     }
     public function update($id, $data){
   $payment = Payment::findOrFail($id);
   $payment->student_id = $data['student_id'] ?? $payment->student_id;
   $payment->course_list_id = $data['course_list_id'] ?? $payment->course_list_id;
   $payment->payment_sum = $data['payment_sum'] ?? $payment->payment_sum;
   $payment->lesson_count_paid = $data['lesson_count_paid'] ?? $payment->lesson_count_paid;
   $payment->month = $data['month'] ?? $payment->month;
   $payment->date_at = $data['date_at'] ?? $payment->date_at;
   $payment->save();
      return $payment;
     }
     public function destroy($id){
       $payment = Payment::findOrFail($id);
       $payment->delete();
     }

}
