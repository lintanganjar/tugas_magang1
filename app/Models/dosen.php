<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $fillable = [
        'id',
        'user_id', 
        'kelas_id',
        'kode_dosen',
        'nip',
        'name',
    ];

    public function kelas()
    {
        
        return $this->belongsTo(Kelas::class, 'kelas_id'); // 'kelas_id' adalah nama field foreign key
    }
    public function user()
{
    return $this->belongsTo(User::class);
}

}
