<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;

class inventarios_controller extends Controller
{
    public function insert_inventario(Request $req){


        $data = Inventario::where("id_bodega", "=", $req -> id_bodega)->where("id_producto", "=", $req -> id_producto)->get();
        $is_exist = (count($data) == 0) ? false : true;

        if($is_exist == false){

            $new_inventario = new Inventario();
    
            $new_inventario -> id_bodega = $req -> id_bodega;
            $new_inventario -> id_producto = $req -> id_producto;
            $new_inventario -> cantidad = $req -> cantidad;
    
            $new_inventario -> save();
    
            return $new_inventario;
        }

        $update_inventario = $data[0];
    
        $update_inventario -> id_bodega = $req -> id_bodega;
        $update_inventario -> id_producto = $req -> id_producto;
        $update_inventario -> cantidad += $req -> cantidad;

        $update_inventario -> save();

        return $data;
    }
}
