<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Detail;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'paradoxadmin',
            'email' => 'paradox123@gmail.com',
            'password' => '23456789',
        ]);

        Detail::create([
            'title' => 'Judul Spesifikasi',
            'rincian' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.',
        ]);
    }
}
