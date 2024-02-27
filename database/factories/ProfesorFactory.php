<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{
    private function getDni(): string{
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        $numero = fake()->randomNumber(8);
        $letra = $letras[$numero % 23];
        $dni = "$numero-$letra";
        return $dni;
    }



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     
    public function definition(): array
    {
        $departamentos = ['Informática', 'Comercio', 'Imagen'];
        return [
            "nombre"=>fake()->name(),
            "apellido" => fake()->lastname(),
            "dni"=>$this->getDni(),
            "email" => fake()->safeEmail(),
            "departamento"=> fake()->randomElement($departamentos)
        ];
    }
}
