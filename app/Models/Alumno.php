<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'direccion',
        'telefono',
        'email'
<<<<<<< HEAD

    ];
    public function idiomas()
    {
        return $this->hasMany(Idioma::class);
    }
}
=======
    ];
}
>>>>>>> 380d64fce8d98ddff355c5747e59efe455864f4c
