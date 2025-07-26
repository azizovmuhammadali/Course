<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    protected $fillable = [
        'student_id',
        'course_list_id',
        'teacher_id',
        'homework_status',
        'month',
        'date_at',
        'payment_status'
    ];
    public function course()
{
    return $this->belongsTo(CourseList::class,'course_list_id');
}
public function student(){
  return  $this->belongsTo(Student::class);
}
public function teacher(){
  return  $this->belongsTo(Teacher::class);
}
}
