<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $fillable=["nombre","nombreReal", "url", "descripcion", "tipo"];
}
