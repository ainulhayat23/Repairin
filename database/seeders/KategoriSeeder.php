<?php

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $kategoris = ['TV', 'Kulkas', 'Mesin Cuci', 'AC', 'Komputer'];

        foreach ($kategoris as $kategori) {
            Kategori::create(['nama_kategori' => $kategori]);
        }
    }
}
