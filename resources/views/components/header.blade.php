<header class="h-15vh bg-header flex flex-row justify-between p-5 item-center text-white" style="font-family: comicsans">
  <img src="{{asset('img/abf8fce6-438f-4ac3-9719-06e2993524d5.jpeg')}}" alt="Holy Moly">
  <h1 class="text-5xl py-5">Gestión Laravel</h1>
  @guest
  <div class="space-x-2 py-5">
    <a href="login" class="btn glass text-white">Iniciar sesión</a>
    <a href="register" class="btn glass text-white">Registrarse</a>
  </div>
  @endguest
  @auth
  <div class="space-x-1 py-1/2">
    <h2>{{auth()->user()->name}}</h2>
    <form action="logout" method="POST">
      @csrf
      <button type="submit" class="btn glass text-white">Log out</button>
    </form>
  </div>
  @endauth
</header>