<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_homework extends Model
{
    use HasFactory;

    
    public $table='course__homeworks';

    public $timestamps=true;
}
