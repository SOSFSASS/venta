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
            $table->string('codigo', 50);
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->string('imagen', 255)->nullable();
            $table->decimal('precio_compra', 10, 2);
            $table->decimal('costo_venta', 10, 2);
            $table->integer('stock');
            $table->dateTime('fechaven');
            $table->unsignedBigInteger('id_categoria');
            $table->boolean('estado')->default(1);
            $table->timestamps();
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
