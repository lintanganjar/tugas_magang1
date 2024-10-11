<?php

namespace Database\Seeders;

use App\Models\mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $mahasiswaData = [
        [
            'id'=> 1,
            'user_id'=> 7,
            'kelas_id'=> 111,
            'nim'=> 215411,
            'name'=> 'Lintang',
            'tempat_lahir'=> 'Jakarta',
            'tanggal_lahir'=> '2001-05-12',
            'edit'=> 0
        ],
        [
            'id'=> 2,
            'user_id'=> 8,
            'kelas_id'=> 111,
            'nim'=> 215412,
            'name'=> 'Anjar',
            'tempat_lahir'=> 'Bandung',
            'tanggal_lahir'=> '2000-11-23',
            'edit'=> 0
        ],
        [
            'id'=> 3,
            'user_id'=> 9,
            'kelas_id'=> 111,
            'nim'=> 215413,
            'name'=> 'Mulya',
            'tempat_lahir'=> 'Surabaya',
            'tanggal_lahir'=> '2002-03-08',
            'edit'=> 0
        ],
        [
            'id'=> 4,
            'user_id'=> 10,
            'kelas_id'=> 111,
            'nim'=> 215414,
            'name'=> 'Tomo',
            'tempat_lahir'=> 'Medan',
            'tanggal_lahir'=> '2001-07-19',
            'edit'=> 0
        ],
        [
            'id'=> 5,
            'user_id'=> 11,
            'kelas_id'=> 111,
            'nim'=> 215415,
            'name'=> 'Toni',
            'tempat_lahir'=> 'Yogyakarta',
            'tanggal_lahir'=> '2000-12-14',
            'edit'=> 0
        ],
        [
            'id'=> 6,
            'user_id'=> 12,
            'kelas_id'=> 111,
            'nim'=> 215416,
            'name'=> 'Bayu',
            'tempat_lahir'=> 'Makassar',
            'tanggal_lahir'=> '2002-06-28',
            'edit'=> 0
        ],
        [
            'id'=> 7,
            'user_id'=> 13,
            'kelas_id'=> 111,
            'nim'=> 215417,
            'name'=> 'Lisa',
            'tempat_lahir'=> 'Semarang',
            'tanggal_lahir'=> '2000-09-10',
            'edit'=> 0
        ],
        [
            'id'=> 8,
            'user_id'=> 14,
            'kelas_id'=> 111,
            'nim'=> 215418,
            'name'=> 'Lina',
            'tempat_lahir'=> 'Malang',
            'tanggal_lahir'=> '2003-01-15',
            'edit'=> 0
        ],
        [
            'id'=> 9,
            'user_id'=> 15,
            'kelas_id'=> 111,
            'nim'=> 215419,
            'name'=> 'Zakia',
            'tempat_lahir'=> 'Palembang',
            'tanggal_lahir'=> '2001-08-04',
            'edit'=> 0
        ],
        [
            'id'=> 10,
            'user_id'=> 16,
            'kelas_id'=> 111,
            'nim'=> 215420,
            'name'=> 'Farida',
            'tempat_lahir'=> 'Balikpapan',
            'tanggal_lahir'=> '2002-04-17',
            'edit'=> 0
        ],
        [
            'id'=> 11,
            'user_id'=> 17,
            'kelas_id'=> 112,
            'nim'=> 215421,
            'name'=> 'Yuni',
            'tempat_lahir'=> 'Banjarmasin',
            'tanggal_lahir'=> '2001-10-30',
            'edit'=> 0
        ],
        [
            'id'=> 12,
            'user_id'=> 18,
            'kelas_id'=> 112,
            'nim'=> 215422,
            'name'=> 'Dio',
            'tempat_lahir'=> 'Pontianak',
            'tanggal_lahir'=> '2000-07-08',
            'edit'=> 0
        ],
        [
            'id'=> 13,
            'user_id'=> 19,
            'kelas_id'=> 112,
            'nim'=> 215423,
            'name'=> 'Mei',
            'tempat_lahir'=> 'Pekanbaru',
            'tanggal_lahir'=> '2002-02-22',
            'edit'=> 0
        ],
        [
            'id'=> 14,
            'user_id'=> 20,
            'kelas_id'=> 112,
            'nim'=> 215424,
            'name'=> 'Cici',
            'tempat_lahir'=> 'Denpasar',
            'tanggal_lahir'=> '2000-09-09',
            'edit'=> 0
        ],
        [
            'id'=> 15,
            'user_id'=> 21,
            'kelas_id'=> 112,
            'nim'=> 215425,
            'name'=> 'Joy',
            'tempat_lahir'=> 'Padang',
            'tanggal_lahir'=> '2001-12-31',
            'edit'=> 0
        ],
        [
            'id'=> 16,
            'user_id'=> 22,
            'kelas_id'=> 112,
            'nim'=> 215426,
            'name'=> 'Ambar',
            'tempat_lahir'=> 'Samarinda',
            'tanggal_lahir'=> '2003-05-21',
            'edit'=> 0
        ],
        [
            'id'=> 17,
            'user_id'=> 23,
            'kelas_id'=> 112,
            'nim'=> 215427,
            'name'=> 'Diki',
            'tempat_lahir'=> 'Batam',
            'tanggal_lahir'=> '2000-04-13',
            'edit'=> 0
        ],
        [
            'id'=> 18,
            'user_id'=> 24,
            'kelas_id'=> 112,
            'nim'=> 215428,
            'name'=> 'Dika',
            'tempat_lahir'=> 'Bandar Lampung',
            'tanggal_lahir'=> '2001-06-26',
            'edit'=> 0
        ],
        [
            'id'=> 19,
            'user_id'=> 25,
            'kelas_id'=> 112,
            'nim'=> 215429,
            'name'=> 'Kia',
            'tempat_lahir'=> 'Manado',
            'tanggal_lahir'=> '2002-10-05',
            'edit'=> 0
        ],
        [
            'id'=> 20,
            'user_id'=> 26,
            'kelas_id'=> 112,
            'nim'=> 215430,
            'name'=> 'Nana',
            'tempat_lahir'=> 'Mataram',
            'tanggal_lahir'=> '2000-03-11',
            'edit'=> 0
        ]
    ];
    foreach ($mahasiswaData as $data) {
        mahasiswa::create($data);
    }
}
}
