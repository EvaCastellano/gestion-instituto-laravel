<x-layouts.layout>
  
  <div class="flex text-black py-6 justify-center overflow-x-auto max-h-full">
    <!-- CARD -->
  <div class="card w-100 shadow-xl bg-nav">
  <div class="card-body">
    <h2 class="card-title">{{$alumno->nombre}} {{$alumno->apellido}}</h2>
    <ul>
      <li><b>Dirección:</b> {{$alumno->direccion}}</li>
      <li><b>Teléfono:</b> {{$alumno->telefono}}</li>
      <li><b>Email:</b> {{$alumno->email}}</li>
      <li><b>Idiomas hablados:</b>
      @foreach($alumno->idiomas as $idioma)
<li>- {{$idioma->idioma}}</li>
      @endforeach
      <a href="" id="enlace">Añadir idioma</a>
      </li>
    </ul>
    <div class="card-actions justify-end">
      <a href="../alumnos" class="btn btn-square btn-outline text-white w-20">Volver</a>
    </div>
  </div>
</div>
<!-- END CARD -->
  </div>
</x-layouts.layout>