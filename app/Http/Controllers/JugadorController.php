<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    // Listar todos los registros
    public function index(){
        $jugadors = Jugador::orderby('id', 'asc')->get();
        return view('jugador.index', compact('jugadors'));
    }

    // Formulario create
    public function create(){
        $equipos = Equipo::all();
        return view('jugador.create',compact('equipos'));
    }

    // Registrar en base de datos un jugador
    public function store(Request $request){
        $jugador = new Jugador();
        $jugador->nombre = $request->nombre;
        $jugador->posicion = $request->posicion;
        $jugador->fecha_nacimiento = $request->fecha_nacimiento;
        $jugador->codigo = $request->codigo;
        $jugador->equipo_id = $request->equipo_id;
        $jugador->save();
        return redirect()->route('jugador.index');
    }

    // Ver un registro
    public function show(Jugador $jugador){
        return view('jugador.show',compact('jugador'));
    }

    // Formulario editar un registro
    public function edit(Jugador $jugador){
        $equipos = Equipo::all();
        return view('jugador.edit', compact('jugador','equipos'));
    }

    // Actualizar un registro
    public function update(Request $request, Jugador $jugador){
     
        $jugador->nombre = $request->nombre;
        $jugador->posicion = $request->posicion;
        $jugador->fecha_nacimiento = $request->fecha_nacimiento;
        $jugador->codigo = $request->codigo;
        $jugador->equipo_id = $request->equipo_id;
        $jugador->save();
        return redirect()->route('equipo.index');
    }

    // Eliminar un registro
    public function destroy (Jugador $jugador){
         $jugador->delete();
        return redirect()->route('jugador.index');
    }
}
