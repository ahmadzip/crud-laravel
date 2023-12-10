<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            'nama' => 'Test User',
            'npm' => '1234567890',
            'email' => 'example@gmail.com',
            'jurusan' => 'Teknik Informatika',
            'jenis_kelamin' => 'cowo',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
