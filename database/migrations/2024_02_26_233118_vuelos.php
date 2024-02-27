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
        Schema::create('Vuelos', function (Blueprint $table) {
            $table->char('numeroVuelo', 5)-> primarykey();
            $table->char('origen',10);
            $table->char('destino',10);
            $table->integer('numeroAsientos');
            $table->timestamp('fechaSalida');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
