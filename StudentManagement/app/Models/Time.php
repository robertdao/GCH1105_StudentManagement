<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;
    protected $table = 'time';
    protected $fillable = [
        'time'
];
public function schedules(){
    return $this->belongsTo(Schedule::class);
}

}
