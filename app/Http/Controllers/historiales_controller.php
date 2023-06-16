<?php

namespace App\Http\Controllers;

use App\Models\Historiale;
use App\Models\Inventario;
use Illuminate\Http\Request;

class historiales_controller extends Controller
{
    public function translado(Request $req){

        $inventario = Inventario::where("id_producto", "=", $req -> id_producto)->where("id_bodega", "=", $req -> id_bodega_origen)->get();
        
        if($inventario[0] -> cantidad < $req -> cantidad){

            return "opps, parece que no tienes esa cantidad en tu bodega";
        }


        $new_historial = new Historiale;
    
        $new_historial -> id_bodega_origen = $req -> id_bodega_origen;
        $new_historial -> id_bodega_destino = $req -> id_bodega_destino;
        $new_historial -> id_inventario = $inventario[0] -> id;
        $new_historial -> cantidad = $req -> cantidad;
        
        $new_historial -> save();
        
        //bodega origen
        $inventario[0] -> cantidad -= $req -> cantidad ;
        $inventario[0] -> save();
        
        //bodega destino
        $bodega_destino = Inventario::where("id_producto", "=", $req -> id_producto)->where("id_bodega", "=", $req -> id_bodega_destino)->get();
        $bodega_destino[0] -> cantidad += $req -> cantidad ;
        $bodega_destino[0] -> save();

        return "se cambio con exito.... :)";
    }
}