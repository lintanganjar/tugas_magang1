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
                'name'=>'kaprodi',
                'email'=>'kaprodi@gmail.com',
                'role'=>'kaprodi',
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>'dosen',
                'email'=>'dosen@gmail.com',
                'role'=>'dosen',
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>'mahasiswa',
                'email'=>'mahasiswa@gmail.com',
                'role'=>'mahasiswa',
                'password'=>bcrypt('12345')
            ],
           
        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }
    }
}
