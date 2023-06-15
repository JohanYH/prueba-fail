<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;

class inventarios_controller extends Controller
{
    public function insert_inventario(Request $req){


        $data = Inventario::where("id_bodega", "=", $req -> id_bodega)->where("id_producto", "=", $req -> id_producto)->get();

        return $data;
    }
}
