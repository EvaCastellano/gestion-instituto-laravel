# Iniciar la app
```bash
docker compose up -d
```
```bash
npm run dev
```
```bash
php artisan serve &
```

# Creando un CRUD para profesores <!-- (migración) -->
Creo un ecosistema
```bash
php artisan make:model Profesor --all
```
↳ El nombre debe ser singular y la primera letra mayúscula

### Esto crea los siguientes elementos:
* Migración ⟶ Para crear las tablas
* Factoría ⟶ Crear valores para una fila de la tabla
* Seeder ⟶ Invocar a la factoría de un model e insertar los valores de la tabla
* Controlador ⟶ Los métodos que voy a ejecutar ante solicitudes del cliente
* Modelo ⟶ Clase para interactuar con una tabla de la base de datos y hacer acciones típicas (como insertar, borrar, consultar y actualizar)
* Request ⟶ Autoriza y valida los datos del formulario
* Policy
* Rutas ⟶ Tengo que crearlas y dirán qué recursos ofrece mi aplicación

## Ajusto los valores por defecto
Como el modelo se llama Profesor y la tabla quiero que se llame profesores en vez de profesors, tengo que especificarlo.

## Creo las rutas
/routes/web.php 
* use App\Http\Controllers\ProfesorController;
* Route::resource("profesores", ProfesorController::class);
  * Esto me crea todas las rutas

## Creo la tabla
En ProfesorFactory.php, hay que definir los campos para los diferentes parámetros dentro del return.

## Modifico el *ProfesorSeeder*
Añado dentro de `$this`, `ProfesorSeeder::class`

## Ejecuto 
```bash
php artisan migrate --seed
```

# Cómo hacer una paginación (para profesores)

### Dentro del archivo *ProfesorController.php*:
* Añadimos `use Request;`

* Dentro de la función **index**: 
  * Cambiamos `$profesores = Profesor::all();` por `$profesores = Profesor::paginate(5);`
  * Añadimos la variable `$page = request::get('page')?? 1;`
  * Cambiamos el "return" por `return view('profesores.listado', ["profesores" => $profesores, "page" => $page]);`

* Dentro de la función **edit**:
  * Añadimos la variable `$page= Request::get("page");`
  * Cambiamos el "return" por `return view('profesores.editar', ["profesor" => $profesor, "page" => $page]);`

* Dentro de la función **update**:
  * Añadimos la variable `$page= Request::get("page");`
  * Eliminamos la variable `$profesores = Profesor::all();`
  * Cambiamos el "return" por `return redirect(route("profesores.index", ["page" => $page]));`

* Dentro de la función **destroy**:
  * Añadimos la variable `$page= Request::get("page");`
  * Modificamos la variable `$profesores = Profesor::all();` por `$profesores = Profesor::paginate(5);`
  * Cambiamos el "return" por `return view("profesores.listado", ["profesores" => $profesores,"page"=>$page]);`

### Dentro del archivo *listado.blade.php*:
* Añadimos al final del archivo, justo donde acaba la etiqueta de la tabla, los botones para navegar por las diferentes páginas. 
  * Primero instalamos a través de la terminal: `npm install --save read-more-react`
  * `{{$profesores->links("vendor.pagination.mipaginacion")}}`
    * El archivo "vendor.pagination.mipaginacion" es uno que he creado a partir de los que salen por defecto de la instalación, ubicado en _**resources/views/vendor/pagination**_

### Dentro de *editar.blade.php*:
\<form action="{{route('profesores.update',[$profesor->id,'page'=>$page])}}" method="post">

# Especificaciones
IP: 8000

`php artisan migrate:fresh --seed`  ⟶ Actualizar/refrescar la base de datos