<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            "nama_bunga" => "Mawar",
            "stok" => 10,
            "harga" => 20000,
            "image" => "bunga-mawar_169.png"
        ]);
    }
}
