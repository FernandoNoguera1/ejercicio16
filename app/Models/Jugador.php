<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    public function equipo(){
        return $this->belongsTo('App\Models\Equipo');
    }

    public function goles()
    {
        return $this->hasMany('App\Models\Gol');
    }

}
