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
        return $this->hasMany(Student::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
}