<?php

use Illuminate\Database\Seeder;
use App\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
          'nama' => 'Jaket Kulit',
          'harga_jual' => '250000',
          'harga_beli' => '200000',
          'stok' => '50',
          'status' => '1',
        ]);

        Produk::create([
          'nama' => 'Tas Kulit',
          'harga_jual' => '300000',
          'harga_beli' => '220000',
          'stok' => '10',
          'status' => '1',
        ]);

        Produk::create([
          'nama' => 'Sepatu Kulit',
          'harga_jual' => '400000',
          'harga_beli' => '320000',
          'stok' => '15',
          'status' => '1',
        ]);

        Produk::create([
          'nama' => 'Ikan Pinggang Kulit',
          'harga_jual' => '100000',
          'harga_beli' => '80000',
          'stok' => '20',
          'status' => '1',
        ]);
    }
}
