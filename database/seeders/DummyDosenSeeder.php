<?php

namespace Database\Seeders;

use App\Models\dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosenData=[
            [
                'id'=>  1,
                'user_id'=> 2 ,
                'kelas_id'=> 111 ,
                'kode_dosen'=> 02 ,
                'nip'=> 12233  ,
                'name'=> "Sari"
            ],
            [
                'id'=>  2,
                'user_id'=>  3,
                'kelas_id'=> 112 ,
                'kode_dosen'=> 03 ,
                'nip'=> 112233 ,
                'name'=> "Putra"
            ],
            [
                'id'=>  3,
                'user_id'=>  4,
                'kelas_id'=> null ,
                'kode_dosen'=> 04 ,
                'nip'=>  1112233,
                'name'=> 'Putri'
            ],
            [
                'id'=>  4,
                'user_id'=>  5,
                'kelas_id'=>  null,
                'kode_dosen'=> 05,
                'nip'=>  1122333,
                'name'=> 'Dini'
            ],
            [
                'id'=>  5,
                'user_id'=> 6 ,
                'kelas_id'=> null,
                'kode_dosen'=>  06,
                'nip'=> 122233 ,
                'name'=> 'Wati'
            ],
        ];
        foreach ($dosenData as  $data) {
            dosen::create($data);
        }
    }
}
