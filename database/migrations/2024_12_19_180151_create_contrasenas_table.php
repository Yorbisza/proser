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
        Schema::connection('serve-yor')->create('proser.contrasenas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_usuario');
            $table->string('password');
            $table->foreignId('serve_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrasenas');
    }
};
