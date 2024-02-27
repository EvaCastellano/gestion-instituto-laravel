<x-layouts.layout>
<div class="flex text-black py-6 justify-center overflow-x-auto max-h-full">
<form action="/alumnos" method="post">
  <label class="form-control w-full max-w-xs" >
  <div class="label">
    <span class="label-text text-black">Nombre</span>
  </div>
  <input type="text" class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
</label>
<label class="form-control w-full max-w-xs">
  <div class="label">
    <span class="label-text text-black">Apellido</span>
  </div>
  <input type="text" class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
</label>
<label class="form-control w-full max-w-xs">
  <div class="label">
    <span class="label-text text-black">Dirección</span>
  </div>
  <input type="text" class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
</label>
<label class="form-control w-full max-w-xs">
  <div class="label">
    <span class="label-text text-black">Teléfono</span>
  </div>
  <input type="text" class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
</label>
<label class="form-control w-full max-w-xs">
  <div class="label">
    <span class="label-text text-black">Email</span>
  </div>
  <input type="text" class="input input-bordered w-full max-w-xs bg-nav rounded text-white" />
</label>
<input class="btn mt-4 text-black" style="background-color: rgb(255, 255, 255, 0.5);" type="submit" value="Crear">
</form>
</div>
  
</x-layouts.layout>



<!-- 
  <div class="flex text-black py-6 justify-center">
    <form action="/alumnos" method="post">
      @csrf
      <div class="py-1">
        <label class="input input-bordered flex items-center bg-nav rounded" style="border: 1px solid black">
          Nombre
          <input type="text" class="grow text-white" />

        </label>
      </div>
      <div class="py-1">
        <label class="input input-bordered flex items-center gap-2  bg-nav rounded" style="border: 1px solid black">
          Apellido
          <input type="text" class="grow text-white" />

        </label>
      </div>
      <div class="py-1">
        <label class="input input-bordered flex items-center gap-2 bg-nav rounded" style="border: 1px solid black">
          Dirección
          <input type="text" class="grow text-white" />

        </label>
      </div>
      <div class="py-1">
        <label class="input input-bordered flex items-center gap-2 bg-nav rounded" style="border: 1px solid black">
          Teléfono
          <input type="text" class="grow text-white" />

        </label>
      </div>
      <div class="py-1">
        <label class="input input-bordered flex items-center gap-2 bg-nav rounded" style="border: 1px solid black">
          Email
          <input type="text" class="grow text-white" />

        </label>
      </div>
      <input class="btn btn-primary" type="submit" value="Crear">
    </form>
  </div>
 -->