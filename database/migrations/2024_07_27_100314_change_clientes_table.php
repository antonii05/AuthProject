<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Se borran los campos contrasenia y se agregan direcciones de entrega
     */
    public function up(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropColumn('password');
            $table->string('direccion')->nullable()->after('nif');
            $table->integer('codigo_postal')->nullable()->after('direccion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('password')->after('email');
            $table->dropColumn('direccion');
            $table->dropColumn('codigo_postal');
        });
    }
};
