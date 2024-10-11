<?php

namespace Database\Seeders;

use App\Models\kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelasData=[
            [
                'id'=>111,
                'name'=> 'reguler1',
                'jumlah'=> 10
            ],

            [
                'id'=>112,
                'name'=> 'reguler2',
                'jumlah'=> 10
            ]

         ];

         foreach ($kelasData as $data) {
            kelas::create($data);
        }
    }
}
