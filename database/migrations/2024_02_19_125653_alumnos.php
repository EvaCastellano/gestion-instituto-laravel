<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
<<<<<<< HEAD
    
=======
    /**
     * Run the migrations.
     */
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->timestamps();
        });
    }

<<<<<<< HEAD
    
=======
    /**
     * Reverse the migrations.
     */
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
