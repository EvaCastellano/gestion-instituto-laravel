<x-layouts.layout>
  <div class="overflow-x-auto max-h-full">
    <a href="/alumnos/create" class="btn btn-primary w-full text-3xl rounded">Añadir alumno</a>
    <table class="table table-pin-rows">
      <thead class="text-white">
        <tr>
          <th>
            Nombre
          </th>
          <th>
            Apellido
          </th>
          <th>
            Dirección
          </th>
          <th>
            Teléfono
          </th>
          <th>
            Email
          </th>
<<<<<<< HEAD
          <th>Editar</th>
          <th>Eliminar</th>
=======
          <th></th>
          <th></th>
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
        </tr>
      </thead>
      @foreach($alumnos as $alumno)
      <tbody class="text-black">
<<<<<<< HEAD
        <tr id="td-hover" onClick="editar_alumno({{$alumno->id}})">
=======
        <tr>
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
          <td class="font-semibold">{{$alumno->nombre}}</td>
          <td>{{$alumno->apellido}}</td>
          <td>{{$alumno->direccion}}</td>
          <td>{{$alumno->telefono}}</td>
          <td>{{$alumno->email}}</td>
<<<<<<< HEAD

            <!-- BOTON EDIT -->
          <td>
            <a href="{{route('alumnos.edit',[$alumno->id, "page"=>$page])}}" class="btn btn-outline text-black"
              style="background-color: rgb(242 214 114 / 46%)"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
              </svg>
            </a>
          </td>
            <!-- BOTON DELETE -->
          <td>
            <form action="/alumnos/{{$alumno->id}}" method="POST">
              @csrf
              @method("DELETE")

              <button class="btn btn-outline text-black" style="background-color: rgb(255 0 0 / 41%)" type="submit"><svg
=======
          
          <td>
            <form action="/alumnos/{{$alumno->id}}" method="POST">
            @csrf
            @method("DELETE")

              <button class="btn btn-outline btn-error" style="background-color: rgb(255, 255, 255, 0.2)" type="submit"><svg
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg></button>
<<<<<<< HEAD
            </form>
          </td>
          
=======


            </form>
          </td>
          <td><button class="btn btn-outline btn-warning" style="background-color: rgb(255, 255, 255, 0.2)"><svg
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
              </svg>
            </button></td>
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
        </tr>
      </tbody>
      @endforeach
    </table>
<<<<<<< HEAD
    <!-- BOTONES NEXT Y PREVIOUS -->
    {{$alumnos->links("vendor.pagination.mipaginacion")}}

    <script>
    function editar_alumno(id) {
      window.location=`http://localhost:8000/alumnos/${id}` 
    }
  </script>

=======
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
  </div>
</x-layouts.layout>