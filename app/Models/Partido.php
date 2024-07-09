<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;
    public function goles(){
        return $this->hasMany('App\Models\Gol');
    }
    public function equipos(){
        return $this->belongsToMany('App\Models\Equipo','partido_equipo');
    }
}
