<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'student_id','classes_id','name', 'birth','email'
    ];
    public function classes(){
        return $this->belongsTo(Classes::class);
    }

}
