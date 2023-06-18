<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'schedule';
    protected $fillable = [
         'classes_id','time_id','classroom_id', 
    ];
    public function times(){
        return $this->hasMany(Schedule::class);
    }
    public function classrooms(){
        return $this->hasMany(Schedule::class);
    }
}
