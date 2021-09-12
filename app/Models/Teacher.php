<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function trade(){
        return $this->belongsTo(Trade::class);
    }

    public function madrasa(){
        return $this->belongsTo(Madrasha::class, 'madrashas_id');
    }
}