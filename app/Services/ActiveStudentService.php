<?php

namespace App\Services;

use App\Interfaces\Reposities\ActiveStudentReposityInterface;
use App\Interfaces\Services\ActiveStudentServiceInterface;

class ActiveStudentService implements ActiveStudentServiceInterface
{

    public function __construct(protected ActiveStudentReposityInterface $activeStudentReposityInterface)
    {
        //
    }
    public function create($activestudentDTO){
     $data = [
        'student_id' => $activestudentDTO->student_id,
        'course_list_id' => $activestudentDTO->course_list_id,
        'payment_amount' => $activestudentDTO->payment_amount,
        'lesson_paid' => $activestudentDTO->lesson_paid,
        'lesson_passed' => $activestudentDTO->lesson_passed,
        'lesson_debt_count' => $activestudentDTO->lesson_debt_count,
        'lesson_debt_sum' => $activestudentDTO->lesson_debt_sum,
        'month' => $activestudentDTO->month,
     ];
     return $this->activeStudentReposityInterface->create($data);
    }
    public function update($id, $activestudentDTO){
 $data = [
        'student_id' => $activestudentDTO->student_id,
        'course_list_id' => $activestudentDTO->course_list_id,
        'payment_amount' => $activestudentDTO->payment_amount,
        'lesson_paid' => $activestudentDTO->lesson_paid,
        'lesson_passed' => $activestudentDTO->lesson_passed,
        'lesson_debt_count' => $activestudentDTO->lesson_debt_count,
        'lesson_debt_sum' => $activestudentDTO->lesson_debt_sum,
        'month' => $activestudentDTO->month,
     ];
     return $this->activeStudentReposityInterface->update($id,$data);
    }
    public function delete($id){
     return $this->activeStudentReposityInterface->delete($id);
    }
}



