<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang' => 'Vivo',
            'nama_supplier' => 'Silvi Lestari',
            'qyt' => 20,
            'tgl' => '2021-06-11',],

            ['nama_barang' => 'Samsung',
            'nama_supplier' => 'Dina Amelia',
            'qyt' => 60,
            'tgl' => '2021-07-15'],

            ['nama_barang' => 'Vivo',
            'nama_supplier' => 'Sila Ramadina',
            'qyt' => 60,
            'tgl' => '2021-09-11'],

            ['nama_barang' => 'Samsung',
            'nama_supplier' => 'Fitria Amelia',
            'qyt' => 80,
            'tgl' => '2021-08-15'],

            ['nama_barang' => 'Vivo',
            'nama_supplier' => 'Rifa Fauziah',
            'qyt' => 100,
            'tgl' => '2021-10-01']
        ];

        DB::table('pembelians')->insert($pembelian);
    }
}

