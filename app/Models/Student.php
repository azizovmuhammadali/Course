<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
         'name',
        'description',
        'phone',
        'status'
    ];
    public function payments(){
        return $this->hasMany(Payment::class);
    }
    public function coursestudents(){
        return $this->hasMany(CourseStudent::class);
    }
}
