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
        //
    }

    public function create()
    {
        return view('alumnos.create');
        //
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
        //
    }

    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        //
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        $alumnos = Alumno::all();
        return view("alumnos.listado", ["alumnos" => $alumnos]);
    }
}