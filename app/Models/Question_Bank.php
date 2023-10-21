<?php

namespace App\Models;

use App\Models\Exam_Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question_Bank extends Model
{
    use HasFactory;

    public $table = 'exam__questions';

    public $fillable = [
        'question',
    ];

    public $timestamps = true;

    public function getQuestion(){
        return $this->hasMany(Exam_Question::class);
    }
}
