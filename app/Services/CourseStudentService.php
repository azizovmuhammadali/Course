<?php

namespace App\Services;

use App\Interfaces\Reposities\CourseStudentReposityInterface;
use App\Interfaces\Services\CourseStudentServiceInterface;

class CourseStudentService implements CourseStudentServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected CourseStudentReposityInterface $courseStudentReposityInterface)
    {
        //
    } 
    public function create($coursestudentDTO){
   $data = [
    'student_id' => $coursestudentDTO->student_id,
    'course_list_id' => $coursestudentDTO->course_list_id,
    'teacher_id' => $coursestudentDTO->teacher_id,
    'homework_status' => $coursestudentDTO->homework_status,
    'month' => $coursestudentDTO->month,
    'date_at' => $coursestudentDTO->date_at,
    'payment_status' => $coursestudentDTO->payment_status,
   ];
     return $this->courseStudentReposityInterface->create($data);
    }
    public function update($id, $coursestudentDTO)
    {
  $data = [
    'student_id' => $coursestudentDTO->student_id,
    'course_list_id' => $coursestudentDTO->course_list_id,
    'teacher_id' => $coursestudentDTO->teacher_id,
    'homework_status' => $coursestudentDTO->homework_status,
    'month' => $coursestudentDTO->month,
    'date_at' => $coursestudentDTO->date_at,
    'payment_status' => $coursestudentDTO->payment_status,
   ];
     return $this->courseStudentReposityInterface->update($id,$data);
    }
    public function delete($id){
    return $this->courseStudentReposityInterface->delete($id);
    }
}
