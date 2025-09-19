<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        foreach (['Undangan','Pengumuman','Nota Dinas','Pemberitahuan'] as $nama) {
            Kategori::create(['nama'=>$nama]);
        }
    }
}