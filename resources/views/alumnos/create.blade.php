<x-layouts.layout>
  <div class="flex text-black py-6 justify-center">  <!-- h-full flex justify-center items-center -->
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
  
</x-layouts.layout>