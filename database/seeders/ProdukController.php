<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProdukController extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            ['id_produk' => 'ND23', 'nama_produk' => 'Sabun Lifebuoy', 'harga_jual' => 2000, 'harga_beli' => 3000],
            ['id_produk' => 'ND23', 'nama_produk' => 'Sabun Lifebuoy', 'harga_jual' => 2000, 'harga_beli' => 3000],
            ['id_produk' => 'ND23', 'nama_produk' => 'Sabun Lifebuoy', 'harga_jual' => 2000, 'harga_beli' => 3000],
            ['id_produk' => 'ND23', 'nama_produk' => 'Sabun Lifebuoy', 'harga_jual' => 2000, 'harga_beli' => 3000],
            ['id_produk' => 'ND23', 'nama_produk' => 'Sabun Lifebuoy', 'harga_jual' => 2000, 'harga_beli' => 3000],
            ['id_produk' => 'ND23', 'nama_produk' => 'Sabun Lifebuoy', 'harga_jual' => 2000, 'harga_beli' => 3000],
            ['id_produk' => 'de23', 'nama_produk' => 'Shampoo Sunsilk', 'harga_jual' => 4000, 'harga_beli' => 5000]
       ] );
    }
}
