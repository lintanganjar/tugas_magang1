<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData=[
            [
                "id"=> 1,
                'username'=>'Jono',
                'email'=>'Jono@kaprodi.gmail.com',
                'role'=>'kaprodi',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 2,
                'username'=>'Sari',
                'email'=>'sari@dosen.gmail.com',
                'role'=>'dosen',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 3,
                'username'=>'Putra',
                'email'=>'putra@dosen.gmail.com',
                'role'=>'dosen',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 4,
                'username'=>'putri',
                'email'=>'putri@dosen.gmail.com',
                'role'=>'dosen',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 5,
                'username'=>'Dini',
                'email'=>'dini@dosen.gmail.com',
                'role'=>'dosen',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 6,
                'username'=>'Wati',
                'email'=>'wati@dosen.gmail.com',
                'role'=>'dosen',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 7,
                'username'=>'lintang',
                'email'=>'lintang@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 8,
                'username'=>'anjar',
                'email'=>'anjar@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 9,
                'username'=>'mulya',
                'email'=>'mulya@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 10,
                'username'=>'Tomo',
                'email'=>'Tomo@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 11,
                'username'=>'Toni',
                'email'=>'Toni@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 12,
                'username'=>'Bayu',
                'email'=>'Bayu@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 13,
                'username'=>'Lisa',
                'email'=>'Lisa@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 14,
                'username'=>'Lina',
                'email'=>'Lina@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 15,
                'username'=>'Zakia',
                'email'=>'Zakia@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 16,
                'username'=>'Farida',
                'email'=>'Farida@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 17,
                'username'=>'Yuni',
                'email'=>'Yuni@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 18,
                'username'=>'Dio',
                'email'=>'Dio@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 19,
                'username'=>'Mei',
                'email'=>'Mei@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 20,
                'username'=>'Cici',
                'email'=>'Cici@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 21,
                'username'=>'Joy',
                'email'=>'Joy@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 22,
                'username'=>'Ambar',
                'email'=>'Ambar@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 23,
                'username'=>'Diki',
                'email'=>'Diki@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 24,
                'username'=>'Dika',
                'email'=>'Dika@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 25,
                'username'=>'Kia',
                'email'=>'Kia@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            [
                'id'=> 26,
                'username'=>'Nana',
                'email'=>'Nana@mahasiswa.gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
            
        ];

        foreach ($userData as $data) {
            User::create($data);
        }
    }
}
