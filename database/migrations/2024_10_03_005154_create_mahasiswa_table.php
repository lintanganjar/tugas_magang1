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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id(); // Kolom id sebagai primary key
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key ke users
            $table->foreignId('kelas_id')->constrained('kelas'); // Foreign key ke kelas
            $table->integer('nim')->unique();
            $table->string('name');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->boolean('edit')->default(false);
            $table->timestamps();
        });
        
    }
    
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
    
};
