<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    public function partidos(){
        return $this->belongsToMany('App\Models\Partido','partido_equipo');
    }

    public function presidente(){
        return $this->belongsTo('App\Models\Presidente');
    }

    public function jugadores(){
        return $this->hasMany('App\Models\Jugador');
    }
}
