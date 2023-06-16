<?php

use App\Http\Controllers\bodegas_controller;
use App\Http\Controllers\historiales_controller;
use App\Http\Controllers\inventarios_controller;
use App\Http\Controllers\productos_controller;
use Illuminate\Support\Facades\Route;

Route::get("/bodegas", [bodegas_controller::class, "get_all"]);

Route::post("/bodega", [bodegas_controller::class, "add_register"]);

Route::get("/productos-order-total", [productos_controller::class, "order_desc_total"]);

Route::post("/producto", [productos_controller::class, "insert_product"]);

Route::post("/inventario", [inventarios_controller::class, "insert_inventario"]);

Route::post("/trasladar", [historiales_controller::class, "translado"]);