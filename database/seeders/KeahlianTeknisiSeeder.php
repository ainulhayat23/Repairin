<?php

use Illuminate\Database\Seeder;
use App\Models\KeahlianTeknisi;
use App\Models\User;
use App\Models\Kategori;

class KeahlianTeknisiSeeder extends Seeder
{
    public function run()
    {
        $teknisis = User::where('role', 'teknisi')->get();
        $kategoris = Kategori::all();

        foreach ($teknisis as $teknisi) {
            // Setiap teknisi punya 2 keahlian acak
            $kategori_ids = $kategoris->random(2)->pluck('id');
            foreach ($kategori_ids as $kategori_id) {
                KeahlianTeknisi::create([
                    'teknisi_id' => $teknisi->id,
                    'kategori_id' => $kategori_id
                ]);
            }
        }
    }
}
