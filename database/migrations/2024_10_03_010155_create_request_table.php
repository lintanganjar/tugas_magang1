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
        Schema::create('request', function (Blueprint $table) {
            $table->id(); // Primary key for request
            $table->foreignId('kelas_id')->constrained('kelas'); // Foreign key to kelas
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa'); // Foreign key to mahasiswa
            $table->string('keterangan'); // Description or additional details
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request');
    }
};
