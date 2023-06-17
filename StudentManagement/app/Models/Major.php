<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    protected $table = 'majors';
    protected $fillable = [
        'name'
    ];
    public function students(){
        $this->hasMany(Student::class);
    }
    public function courses(){
        $this->hasMany(Course::class);

    }
}