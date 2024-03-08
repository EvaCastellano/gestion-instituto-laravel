<x-layouts.layout>
  <form action="{{route('alumnos.update', [$alumno->id, 'page' => $page])}}" method="post">
      @csrf
      @method("PUT")
<div class="flex w-full">
  <div class="grid h-20 flex-grow place-items-center"><!-- NOMBRE -->
      <label class="form-control  max-w-xs">
        <div class="label">
          <span class="label-text text-black">Nombre</span>
        </div>
        <input type="text" value="{{$alumno->nombre}}" name="nombre"
          class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
      </label>
      <!-- APELLIDO -->
      <label class="form-control w-full max-w-xs">
        <div class="label">
          <span class="label-text text-black">Apellido</span>
        </div>
        <input type="text" value="{{$alumno->apellido}}" name="apellido"
          class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
      </label>
      <!-- DIRECCION -->
      <label class="form-control w-full max-w-xs">
        <div class="label">
          <span class="label-text text-black">Dirección</span>
        </div>
        <input type="text" value="{{$alumno->direccion}}" name="direccion"
          class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
      </label>
      <!-- TELEFONO -->
      <label class="form-control w-full max-w-xs">
        <div class="label">
          <span class="label-text text-black">Teléfono</span>
        </div>
        <input type="text" value="{{$alumno->telefono}}" name="telefono"
          class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
      </label>
    </div>

  <div class="divider divider-horizontal m-0 w-0 h-0"></div>

  <div class="grid h-20 flex-grow place-items-center">
      <!-- EMAIL -->
      <label class="form-control w-full max-w-xs">
        <div class="label">
          <span class="label-text text-black">Email</span>
        </div>
        <input type="text" value="{{$alumno->email}}" name="email"
          class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
      </label>
<!-- IDIOMAS -->
      <label class="">
        <div class="label">
          <span class="label-text text-black">Idiomas hablados</span>
        </div>
        @foreach($alumno->idiomas as $idioma)
        <input type="checkbox" id="idiomas" value="idioma" class="checkbox m-1 [--chkbg:#7C68A6]" checked="checked"/> {{$idioma->idioma}}
        <br>
        @endforeach
      </label>
      <!-- BOTON VOLVER -->
      <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ms-4">
          {{ __('Volver (no)') }}
        </x-primary-button>
<!-- BOTON EDITAR -->
        <x-primary-button class="ms-4">
          {{ __('Editar') }}
        </x-primary-button>
      </div>
      </div>
    </form>
  </div>
</x-layouts.layout>