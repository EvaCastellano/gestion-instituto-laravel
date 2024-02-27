<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @vite("resources/css/app.css")
</head>

<body>
  <!-- HEADER -->
  <x-header />

  <!-- NAV BAR -->
  <x-nav />
  
  <!-- MAIN -->
  <main class="h-65vh bg-main text-white">
    {{ $slot }}
  </main>

  <!-- FOOTER -->
  <x-footer />

</body>
</html>