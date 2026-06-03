<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class kategoriTableSeeder extends Seeder
{
    public function run()
    {
        Kategori::create([
            'nama' => 'Makanan'
        ]);

        Kategori::create([
            'nama' => 'Perlengkapan Rumah Tangga'
        ]);

        Kategori::create([
            'nama' => 'Alat Belajar'
        ]);
    }
}