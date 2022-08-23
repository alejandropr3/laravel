<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    protected $table='categoria';
    protected $primarykey='idcategoria';
    protected $fillable=[
    'nombreCategoria',
    'descripcion'
    ];

}
