<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inventario;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ["nombre", "descripcion", "created_by", "update_by"];

    public function total_inventario_product(){

        $data = Inventario::where("id_producto", "=", $this -> id)->get();
        return $data;
    }
}
