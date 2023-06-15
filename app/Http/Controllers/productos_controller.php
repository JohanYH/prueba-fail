<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Producto;
use Illuminate\Http\Request;

class productos_controller extends Controller
{
    public function order_desc_total(){

        $arr_data = array();
        $result_all = Producto::all();

        foreach($result_all as $key => $value_father){

            $suma_total_tmp = 0;
            $cantidad_tmp = $value_father -> total_inventario_product();

            foreach($cantidad_tmp as $key => $value_child){

                $suma_total_tmp += $value_child -> cantidad;
            }// each

            $value_father -> total = $suma_total_tmp;
            array_push($arr_data, $value_father);
        }

        usort($arr_data, function ($a, $b) {
            return $a->total - $b->total;
        });        

        return array_reverse($arr_data);
    }

    public function insert_product(Request $req){

        $new_dato_product = Producto::create($req->all());

        $new_inventario = new Inventario;

        $new_inventario -> id_bodega = $req -> id_bodega;
        $new_inventario -> id_producto = $new_dato_product -> id;
        $new_inventario -> cantidad = $req -> cantidad;

        $new_inventario -> save();

        return $new_inventario;
    }
}