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
            $table->id(); // [cite: 126]
            $table->string('nombre'); // [cite: 127]
            $table->string('apellido'); // [cite: 128]
            $table->string('correo')->unique(); // [cite: 129]
            $table->decimal('salario', 10, 2); // [cite: 130]
            $table->timestamps(); // [cite: 131]
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
