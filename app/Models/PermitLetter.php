<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermitLetter extends Model
{
    //use HasFactory;

    protected $table = 'permit_letter';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, "class_id");
    }

    public function scopeFilterByName($query, $user_id)
    {
        return $query->where('user_id', $user_id);

    }
}
