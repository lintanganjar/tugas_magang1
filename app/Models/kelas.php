<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = [
        'id', 
        'name',
        'jumlah',
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
    public function dosen()
    {
        return $this->hasMany(Dosen::class, 'kelas_id');
    }
}
