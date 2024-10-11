<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{

    use HasFactory;

    protected $table = 'mahasiswa';
    protected $fillable = [
        'id',
        'user_id', 
        'kelas_id',
        'nim',
        'name',
        'tempat_lahir',
        'tanggal_lahir',
        'edit'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id'); // 'kelas_id' adalah nama field foreign key
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Sesuaikan dengan foreign key
    }
    public function requests()
    {
        return $this->hasMany(requests::class);
    }

    public function latestRequest()
    {
        return $this->hasOne(Requests::class)->latest();
    }

}
