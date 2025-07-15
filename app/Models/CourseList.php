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
}
