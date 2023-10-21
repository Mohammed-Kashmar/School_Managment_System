<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Admin_Note extends Model
{
    use HasFactory;

    public $table = 'admin__notes';

    public $fillable = [
        'notes',
    ];

    public $timestamps = true;

    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
