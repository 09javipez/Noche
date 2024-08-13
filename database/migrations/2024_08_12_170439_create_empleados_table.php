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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();

            $table->string('apellido1', 45);
            $table->string('apellido2', 45);
            $table->string('nombre1', 45);
            $table->string('nombre2', 45)->nullable();
            $table->date('fechaNac')->unique();
            $table->string('numeroIdenti')->unique();
            $table->string('numeroTel',16)->unique();
            $table->enum('sexo',['masculino','femenino'])->default('masculino');
            $table->string('direccion',80);
            $table->string('email')->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
