<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    // Listar todos los registros
    public function index(){
        $equipos = Equipo::orderby('id', 'asc')->get();
        return view('equipo.index', compact('equipos'));
    }

    // Formulario create
    public function create(){
        return view('equipo.create');
    }

    // Registrar en base de datos un viajero
    public function store(Request $request){
        $equipo = new Equipo();
        $equipo->nombre = $request->nombre;
        $equipo->ciudad = $request->ciudad;
        $equipo->codigo = $request->codigo;
        $equipo->estadio = $request->estadio;
        $equipo->aforo = $request->aforo;
        $equipo->año = $request->año;
        $equipo->save();
        return redirect()->route('equipo.index');
    }

    // Ver un registro
    public function show(Equipo $equipo){
        return view('equipo.show',compact('equipo'));
    }

    // Formulario editar un registro
    public function edit(Equipo $equipo){
        return view('equipo.edit', compact('equipo'));
    }

    // Actualizar un registro
    public function update(Request $request, Equipo $equipo){
     
        $equipo->nombre = $request->nombre;
        $equipo->ciudad = $request->ciudad;
        $equipo->codigo = $request->codigo;
        $equipo->estadio = $request->estadio;
        $equipo->aforo = $request->aforo;
        $equipo->año = $request->año;
        $equipo->save();
        return redirect()->route('equipo.index');
    }

    // Eliminar un registro
    public function destroy (Equipo $equipo){
         $equipo->delete();
        return redirect()->route('equipo.index');
    }
}