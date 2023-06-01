<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //use HasFactory;

    protected $table = 'class';
    protected $fillable = [
        'major_id',
        'class_name',
        'user_id'
    ];

    public function major(){
        return $this->belongsTo('App\Models\Major', 'id_major');
    }
}
