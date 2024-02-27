## Iniciar la app
```bash
docker compose up -d
```
```bash
npm run dev
```
```bash
php artisan serve &
```

## Creando un CRUD para profesores
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

## Modifico el ProfesorSeeder
Añado dentro de $this ProfesorSeeder::class

## Ejecuto 
```bash
php artisan migrate --seed
```











<!-- <br>

```bash
php artisan make:migration profesores --create=profesores
``` -->
