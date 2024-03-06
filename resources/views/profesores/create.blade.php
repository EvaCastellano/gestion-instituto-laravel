<x-layouts.layout>
  <div class="flex text-black py-6 justify-center overflow-x-auto max-h-full">
    <form action="/profesores" method="post">
      @csrf
      <label class="form-control w-full max-w-xs">
        <div class="label">
          <span class="label-text text-black">Nombre</span>
        </div>
      </label>

      <input type="text" :value="{{old('nombre')}}" name="nombre" class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
      @foreach($errors->get('nombre') as $error)
      <p class="text-red-500 text-sm">{{$error}}</p>
      @endforeach
      <label class="form-control w-full max-w-xs">
        <div class="label">
          <span class="label-text text-black">Apellido</span>
        </div>
      </label>
      <input type="text" :value="{{old('apellido')}}" name="apellido" class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
      @foreach($errors->get('apellido') as $error)
      <p class="text-red-500 text-sm">{{$error}}</p>
      @endforeach
      <label class="form-control w-full max-w-xs">
        <div class="label">
          <span class="label-text text-black">DNI</span>
        </div>
      </label>
      <input type="text" :value="{{old('dni')}}" name="dni" class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
      @foreach($errors->get('dni') as $error)  
      <p class="text-red-500 text-sm">{{$error}}</p>
      @endforeach
      <label class="form-control w-full max-w-xs">
        <div class="label">
          <span class="label-text text-black">Email</span>
        </div>
      </label>
      <input type="text" :value="{{old('email')}}" name="email" class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
      @foreach($errors->get('email') as $error)  
      <p class="text-red-500 text-sm">{{$error}}</p>
      @endforeach
      <label class="form-control w-full max-w-xs">
        <div class="label">
          <span class="label-text text-black">Departamento</span>
        </div>
        <select name="departamento" id="" class="bg-nav">
          <option disabled selected>~ Seleccione departamento ~</option>
          <option value="Informática">Informática</option>
          <option value="Comercio">Comercio</option>
          <option value="Imagen">Imagen</option>
        </select>

      </label>

      <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ms-4">
          {{ __('Crear') }}
        </x-primary-button>
      </div>
    </form>
  </div>

</x-layouts.layout>