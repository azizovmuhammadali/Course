<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
    'student_id',
    'course_list_id',
    'payment_sum',
    'lesson_count_paid',
    'month',
    'date_at'
];

    public function student()
{
    return $this->belongsTo(Student::class);
}

public function course()
{
    return $this->belongsTo(CourseList::class,'course_list_id');
}

}
