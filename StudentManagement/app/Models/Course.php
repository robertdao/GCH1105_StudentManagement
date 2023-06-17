<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = [
        'name', 'majors_id'
    ];
    public function majors(){
        $this->belongsTo(Major::class);
        return $this->belongsTo(Major::class);
    }
}
