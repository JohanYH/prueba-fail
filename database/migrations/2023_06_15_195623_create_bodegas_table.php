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
        Schema::create('bodegas', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->unsignedBigInteger("id_responsable");
            $table->tinyInteger("estado")->default(1);
            $table->unsignedBigInteger("created_by")->nullable();
            $table->unsignedBigInteger("update_by")->nullable();

            $table->foreign("id_responsable")->references("id")->on("users");
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
        Schema::dropIfExists('bodegas');
    }
};
