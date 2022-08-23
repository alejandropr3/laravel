<?php
namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\proveedores;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\Group;

class ProductosController extends Controller
{  
    public function productosx(){
    $sql='SELECT * FROM Productos';
    $products = DB::select($sql);
    return $products;

    }
    public function decendiendo(){
        $jo=DB::table('productos')->orderByDesc('precioUnidad')->Limit(10)->get();
    return $jo;
    }
 
    public function productocat(){
       $produccat = DB::select('SELECT COUNT(productos.idproducto) AS TotalProductos, idCategoria FROM productos GROUP BY productos.idCategoria ORDER BY idCategoria DESC LIMIT 10;');
       return $produccat;
          
}
    public function categoriasprom(){
        $prom = DB::table('Categorias as c')
        ->join('Productos as p','c.idCategoria','=','p.idCategoria')
        ->selectRaw('count(p.idproducto) as Cantidad, c.nombreCategoria')
        ->groupBy('c.nombreCategoria')
        ->get();
    }

    public function proveedoresps(){   
       $prov = proveedores::select('pais','idProveedor')->get();
    }
   
}
