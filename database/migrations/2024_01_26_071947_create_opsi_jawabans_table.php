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
        Schema::create('opsi_jawabans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soal_id');
            $table->string('opsi_A');
            $table->string('opsi_B');
            $table->string('opsi_C');
            $table->string('opsi_D');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opsi_jawabans');
    }
};
