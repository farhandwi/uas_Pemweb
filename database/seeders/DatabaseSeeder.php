<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Admin;
use App\Models\Tipe_soal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Farhan Dwi Septian',
            'email' => 'farhandwi234@gmail.com',
            'password' => bcrypt('password')
        ]);

        Admin::create([
            'user_id' => '1',
        ]);

        Tipe_soal::create([
            'nama' => 'pilihan ganda',
        ]);

        Tipe_soal::create([
            'nama' => 'isian',
        ]);
    }
}
