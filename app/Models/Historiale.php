<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historiale extends Model
{
    use HasFactory;

    protected $fillable = ["id_bodega_origen", "id_bodega_destino", "id_producto", "cantidad", "created_by", "update_by"];
}
