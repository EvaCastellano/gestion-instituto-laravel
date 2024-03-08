<nav class="h-10vh bg-nav justify-center items-center py-5 space-x-3 flex">
  <a href="main" class="btn btn-outline text-white">Home</a> <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
   -->
   
   <div class="dropdown">
  <div tabindex="0" role="button" class="btn btn-outline text-white">Alumnos</div>
  <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-nav rounded-box w-52 text-white">
    <li><a href="{{route('alumnos.index')}}">Gestión</a></li>
    <li><a href="{{route('alumnos.index')}}">Listado</a></li>
  </ul>
</div>


  
  <a href="{{route('profesores.index')}}" class="btn btn-outline text-white">Profesores</a>
  <a href="about" class="btn btn-outline text-white">About</a>
  <button class="btn btn-outline text-white">Contacto</button>
  
</nav>