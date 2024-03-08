<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Alumno;
<<<<<<< HEAD
use Request;
=======
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c

class AlumnoController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $alumnos = Alumno::paginate(5);
        $page = request::get('page')?? 1;
        return view('alumnos.listado', ["alumnos" => $alumnos, "page" => $page]);
=======
        $alumnos = Alumno::all();
        return view('alumnos.listado', ["alumnos" => $alumnos]);
        //
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
    }

    public function create()
    {
        return view('alumnos.create');
<<<<<<< HEAD
=======
        //
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
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
<<<<<<< HEAD
        $alumnos = Alumno::paginate(5);
        $page = request::get('page')?? 1;
        return view('alumnos.show', compact('alumno'));
=======
        //
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
    }

    public function edit(Alumno $alumno)
    {
<<<<<<< HEAD
        $page= Request::get("page");
        return view('alumnos.editar', ["alumno" => $alumno, "page" => $page]);
=======
        //
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
    }

    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
<<<<<<< HEAD
        $page= Request::get("page");
        // recojo todos los inputs del formulario
        // $request es la solicitud que trae con ella un formulario con datos
        $valores = $request->input();  // leo los datos del formulario

        $alumno->update($valores);  // actualizo el alumno que estoy editando y lo actualizo con los nuevos datos del formulario

        /* return response()->redirectTo(route("alumnos.index", ["page" => $page])); */
        return redirect(route("alumnos.index", ["page" => $page])); // lo mismo⤴
=======
        //
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
    }

    public function destroy(Alumno $alumno)
    {
<<<<<<< HEAD
        $page= Request::get("page");
        $alumno->delete();
        $alumnos = Alumno::paginate(5);
        return view("alumnos.listado", ["alumnos" => $alumnos,"page"=>$page]); 
=======
        $alumno->delete();
        $alumnos = Alumno::all();
        return view("alumnos.listado", ["alumnos" => $alumnos]);
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
    }
}