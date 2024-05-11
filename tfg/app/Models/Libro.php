<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    public function escritor() {
        return $this->belongsTo('App\Models\Escritor');
    }
    
    public function genero() {
        return $this->belongsTo('App\Models\Genero');
    }
    public function comentarios() {
        return $this->belongsTo('App\Models\Comentarios');
    }
    public function librosLeidos() {
        return $this->hasOne('App\Models\LibrosLeidos');
    }

  

}
