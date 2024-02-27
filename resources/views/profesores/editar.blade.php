<x-layouts.layout>
  <div class="flex text-black py-6 justify-center overflow-x-auto max-h-full">
    <form action="/profesores/{{$profesor->id}}" method="post">
      @csrf
      @method('PUT')
      <label class="form-control w-full max-w-xs">
        <div class="label">
          <span class="label-text text-black">Nombre</span>
        </div>
        <input type="text" value="{{$profesor->nombre}}" name="nombre"
          class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
      </label>
      <label class="form-control w-full max-w-xs">
        <div class="label">
          <span class="label-text text-black">Apellido</span>
        </div>
        <input type="text" value="{{$profesor->apellido}}" name="apellido"
          class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
      </label>
      <label class="form-control w-full max-w-xs">
        <div class="label">
          <span class="label-text text-black">Email</span>
        </div>
        <input type="text" value="{{$profesor->email}}" name="email"
          class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
      </label>
      <label class="form-control w-full max-w-xs">
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
            {{ __('Guardar') }}
          </x-primary-button>
        </div>
    </form>
  </div>
</x-layouts.layout>