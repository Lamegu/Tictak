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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('imagen')->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('precio');
            $table->integer('estado')->default(1);
            $table->unsignedBigInteger('tipo_producto_id');
            $table->timestamps();

            //foreing key
            $table->foreign('tipo_producto_id', 'fk_productos_tipo_producto_id')->references('id')->on('tipos_productos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
