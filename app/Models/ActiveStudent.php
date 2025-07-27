<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActiveStudent extends Model
{
    protected $fillable = [
        'student_id',
        'course_list_id',
        'payment_amount',
        'lesson_paid',
        'lesson_passed',
        'lesson_debt_count',
        'lesson_debt_sum',
        'month',
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
