<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('dosen', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
        $table->foreignId('kelas_id')->nullable()->constrained('kelas');
        $table->string('kode_dosen')->unique(); // Use string instead of integer
        $table->string('nip')->unique(); // Use string instead of integer
        $table->string('name');
        $table->timestamps();
    });
    
}

public function down()
{
    Schema::dropIfExists('dosen');
}

};
