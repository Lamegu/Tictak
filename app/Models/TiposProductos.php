<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposProductos extends Model
{
    use HasFactory;

    protected $table = 'Tipos_Productos';

    protected $fillable = [
        'id',
        'nombre'  
    ];
}
