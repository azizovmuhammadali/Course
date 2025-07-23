<?php

namespace App\Services;

use App\Interfaces\Reposities\PaymentReposityInterface;
use App\Interfaces\Services\PaymentServiceInterface;

class PaymentService implements PaymentServiceInterface
{

    public function __construct(protected PaymentReposityInterface $paymentReposityInterface)
    {
        
    }
    public function create($paymentDTO){
   $data = [
     'student_id' => $paymentDTO->student_id,
    'course_list_id' => $paymentDTO->course_list_id,
    'payment_sum' => $paymentDTO->payment_sum,
    'lesson_count_paid' => $paymentDTO->lesson_count_paid,
    'month' => $paymentDTO->month,
    'date_at' => $paymentDTO->date_at,
   ];
     return $this->paymentReposityInterface->create($data);
    }
    public function update($id,$paymentDTO){
      $data = [
        'student_id' => $paymentDTO->student_id,
    'course_list_id' => $paymentDTO->course_list_id,
    'payment_sum' => $paymentDTO->payment_sum,
    'lesson_count_paid' => $paymentDTO->lesson_count_paid,
    'month' => $paymentDTO->month,
      'date_at' => $paymentDTO->date_at,
   ];
     return $this->paymentReposityInterface->update($id,$data);
    }
    public function delete($id){
        return $this->paymentReposityInterface->destroy($id);
    }
}
