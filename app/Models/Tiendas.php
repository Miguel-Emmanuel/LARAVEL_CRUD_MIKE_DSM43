<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiendas extends Model
{
    use HasFactory;
    protected $table = 'td_tiendas';
    protected $primaryKey = 'id_tienda';
    protected $fillable = [
        'clave',
        'nombre',
     'foto',
    ];
}
