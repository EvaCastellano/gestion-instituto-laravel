<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Alumno;
use Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::paginate(5);
        $page = request::get('page')?? 1;
        return view('alumnos.listado', ["alumnos" => $alumnos, "page" => $page]);
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
        $page= Request::get("page");
        return view('alumnos.editar', ["alumno" => $alumno, "page" => $page]);
    }

    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        $page= Request::get("page");
        // recojo todos los inputs del formulario
        // $request es la solicitud que trae con ella un formulario con datos
        $valores = $request->input();  // leo los datos del formulario

        $alumno->update($valores);  // actualizo el alumno que estoy editando y lo actualizo con los nuevos datos del formulario

        /* return response()->redirectTo(route("alumnos.index", ["page" => $page])); */
        return redirect(route("alumnos.index", ["page" => $page])); // lo mismo⤴
    }

    public function destroy(Alumno $alumno)
    {
        $page= Request::get("page");
        $alumno->delete();
        $alumnos = Alumno::paginate(5);
        return view("alumnos.listado", ["alumnos" => $alumnos,"page"=>$page]); 
    }
}