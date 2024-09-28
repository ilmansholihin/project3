<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin01',
            'email' => 'admin01@gmail.com',
            'password' => Hash::make('123456789'),
            'level' => 'admin',
            'jenis_kelamin' => 'Laki-laki'
        ]);
    }
}
