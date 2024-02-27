<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.listado', ["alumnos" => $alumnos]);
    }

    public function create()
    {
        return view('alumnos.create');
    }

    public function store(StoreAlumnoRequest $request)
    {
        $valores = $request->input();
        $alumno = new Alumno($valores);
        $alumno->save();
        $alumnos = Alumno::all();
        return view("alumnos.listado", ["alumnos" => $alumnos]);
    }


    public function show(Alumno $alumno)
    {
        //
    }

    public function edit(Alumno $alumno)
    {
        return view('alumnos.editar', ["alumno" => $alumno]);
    }

    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        // recojo todos los inputs del formulario
        // $request es la solicitud que trae con ella un formulario con datos
        $valores = $request->input();  // leo los datos del formulario

        $alumno->update($valores);  // actualizo el alumno que estoy editando y lo actualizo con los nuevos datos del formulario

        $alumnos = Alumno::all();  // recupero todos los datos del formulario

        return view("alumnos.listado", ["alumnos" => $alumnos]);  // entrego esos datos a la vista para que me lo muestre en una tabla
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        $alumnos = Alumno::all();
        return view("alumnos.listado", ["alumnos" => $alumnos]);
    }
}