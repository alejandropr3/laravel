<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    use HasFactory;
    protected $table='proveedores';
    protected $primarykay='idProveedor';
    protected $fallabel=[
    'nombreCompania',
    'nombrecontacto',
    'cargocontacto',
    'direccion',
    'ciudad',
    'region',
    'codPostal',
    'pais',
    'telefono',
    'fax',
    'paginaprincipal'
    ];
}
