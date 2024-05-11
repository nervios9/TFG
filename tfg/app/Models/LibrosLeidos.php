<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibrosLeidos extends Model
{
    use HasFactory;


    public function libros() {
        return $this->belongsTo('App\Models\Libro');
    }
    public function usuario() {
        return $this->belongsTo('App\Models\Usuario');
    }
}
