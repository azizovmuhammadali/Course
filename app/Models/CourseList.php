<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseList extends Model
{
    protected $fillable = [
        'name',
        'price',
        'period',
    ];
       public function payments(){
        return $this->hasMany(Payment::class);
    }
       public function coursestudents(){
        return $this->hasMany(CourseStudent::class);
    }
    public function activestudents(){
        return $this->hasMany(ActiveStudent::class);
    }
}
