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
        //phone_id  es la convencion para determinar luego en el modelo ser llave foranea
        Schema::create('sims', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number');
            $table->string('company');
            $table->string('phone_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sims');
    }
};
