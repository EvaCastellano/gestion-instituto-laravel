<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function index()
    {
        $profesor = Profesor::all();
        return view('profesores.listado', ["profesores" => $profesor]);
    }
    public function create()
    {
        return view('profesores.create');
    }
    public function store(StoreProfesorRequest $request)
    {
        $valores = $request->input();
        $profesor = new Profesor($valores);
        $profesor->save();
        $profesores = Profesor::all();
        session()->flash("status", "Se ha creado el profesor $profesor->nombre $profesor->apellido (id: $profesor->id).");
        return view("profesores.listado", ["profesores" => $profesores]);
    }
    public function show(Profesor $profesor)
    {
        //
    }
    public function edit(int $id)
    {
        $profesor = Profesor::find($id);
        return view('profesores.editar', ["profesor" => $profesor]);
    }
    public function update(UpdateProfesorRequest $request, int $id)
    {
        $profesor = Profesor::find($id);
        // recojo todos los inputs del formulario
        // $request es la solicitud que trae con ella un formulario con datos
        $valores = $request->input();  // leo los datos del formulario

        $profesor->update($valores);  // actualizo el profesor que estoy editando y lo actualizo con los nuevos datos del formulario

        $profesores = Profesor::all();  // recupero todos los datos del formulario
        session()->flash("status", "Se ha actualizado el profesor $profesor->nombre $profesor->apellido (id: $profesor->id).");

        return view("profesores.listado", ["profesores" => $profesores]);  // entrego esos datos a la vista para que me lo muestre en una tabla

    }
    public function destroy(int $id)
    {
        $profesor = Profesor::find($id);
        $profesor->delete();
        $profesores = Profesor::all();
        session()->flash("status", "Se ha borrado el profesor $profesor->nombre $profesor->apellido.");
        return view("profesores.listado", ["profesores" => $profesores]);
    }
}
