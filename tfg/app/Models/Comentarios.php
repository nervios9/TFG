<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;


    public function libros() {
        return $this->hasMany('App\Models\Libro');
    }
    public function user() {
        return $this->hasOne('App\Models\User');
    }
}
