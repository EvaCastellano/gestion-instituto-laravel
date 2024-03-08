<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
<<<<<<< HEAD
        $this->call([AlumnoSeeder::class]);
        $this->call([ProfesorSeeder::class]);
=======
        $this->call([
            alumnoSeeder::class
        ]); 
        // \App\Models\User::factory(10)->create();  

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
    }
}
