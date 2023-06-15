<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('historiales', function (Blueprint $table) {
            $table->id();
            $table->integer("catidad");
            $table->unsignedBigInteger("id_bodega_origen");
            $table->unsignedBigInteger("id_bodega_destino");
            $table->unsignedBigInteger("id_inventario");
            $table->unsignedBigInteger("created_by")->nullable();
            $table->unsignedBigInteger("update_by")->nullable();

            $table->foreign("id_bodega_origen")->references("id")->on("bodegas");
            $table->foreign("id_bodega_destino")->references("id")->on("bodegas");
            $table->foreign("id_inventario")->references("id")->on("inventarios");
            $table->foreign("created_by")->references("id")->on("users");
            $table->foreign("update_by")->references("id")->on("users");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historiales');
    }
};
