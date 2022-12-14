<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
  protected $fillable = [
    'titulo',
    'autor',
    'editorial',
    'genero',
    'isbn',
    'edicion',
    'anio',
    'idioma',
  ];
}
