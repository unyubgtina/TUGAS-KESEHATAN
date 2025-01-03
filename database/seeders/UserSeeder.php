<?php

namespace Database\Seeders;

use Illuminate\Database\Seeders;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //membuat pengguna pasien
        User::create([
            'name'=>'Pasien1',
            'email'=>'pasien1@example.com',
            'password'=>bcrypt('password'), //ini bisa diganti dengan password yang mudah diingat
            'role'=>'pasien', //menentukan role sebagai mahasiswa
        ]);

        //membuat pengguna admin
        User::create([
            'name'=>'Admin1',
            'email'=>'admin@example.com',
            'password'=>bcrypt('password'), //bisa diganti dengan password yang diinginkan
            'role'=>'admin' //memnetukan role sebagai admin
        ]);
    }
}
