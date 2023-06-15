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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_bodega");
            $table->unsignedBigInteger("id_producto");
            $table->integer("cantidad");
            $table->unsignedBigInteger("created_by")->nullable();
            $table->unsignedBigInteger("update_by")->nullable();

            $table->foreign("id_bodega")->references("id")->on("bodegas");
            $table->foreign("id_producto")->references("id")->on("productos");
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
        Schema::dropIfExists('inventarios');
    }
};
