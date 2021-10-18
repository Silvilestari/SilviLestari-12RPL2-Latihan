<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama' => 'Vivo',
            'varian' => 'Y19',
            'harga_beli' => 2500000,
            'harga_jual' => 3000000],

            ['nama' => 'Samsung',
            'varian' => 'J3 2015',
            'harga_beli' => 1500000,
            'harga_jual' => 2000000],

            ['nama' => 'Vivo',
            'varian' => 'Y20',
            'harga_beli' => 3500000,
            'harga_jual' => 4000000],

            ['nama' => 'Vivo',
            'varian' => 'Y12',
            'harga_beli' => 2800000,
            'harga_jual' => 3000000],

            ['nama' => 'Samsung',
            'varian' => 'J2 Prime',
            'harga_beli' => 1000000,
            'harga_jual' => 1500000]
        ];

        DB::table('barangs')->insert($barang);
    }
}
