<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected $table = 'tb_usuarios';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'clave',
        'nombre',
        'app',
        'ap',
        'fn',
        'gen',
        'foto',
        'email',
        'pass',
        'nivel',
        'activo',

    ];
    
}
