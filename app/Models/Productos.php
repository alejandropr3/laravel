<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $primarykey='idproducto';
    protected $table='producto';
    protected $fillabel= [
        'nombreProducto',
        'idProveedor',
        'idCategoria',
        'cantidadPorUnidad',
        'precioUnidad',
        'unidadesEnExistencia',
        'unidadesEnPedido',
        'nivelNuevoPedido',
        'suspendido',
        'categoriaProducto'
    ];

}
