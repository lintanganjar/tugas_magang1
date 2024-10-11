<?php

namespace Database\Seeders;

use App\Models\kaprodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyKaprodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kaprodiData=[
            [
                'id'=> 1,
                'user_id'=> 1,
                'kode_dosen'=> 01,
                'nip'=> 0123,
                'name'=> 'Jono'
            ]
            ];
            foreach ($kaprodiData as  $data) {
                kaprodi::create($data);
            }
    }
}
