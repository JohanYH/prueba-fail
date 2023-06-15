<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use Illuminate\Http\Request;

class bodegas_controller extends Controller
{
    public function get_all(){

        $data = Bodega::orderBy("nombre", "asc")->get();
        return $data;
    }

    public function add_register(Request $req){

        return Bodega::create($req->all());
        
    }
}
