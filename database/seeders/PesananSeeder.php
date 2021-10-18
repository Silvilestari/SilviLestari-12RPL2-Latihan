<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelanggan' => 'Silvi Lestari',
            'nama_barang' => 'Vivo',
            'qyt' => 20,
            'tgl_pesan' => '2021-06-11',],

            ['nama_pelanggan' => 'Dina Amelia',
            'nama_barang' => 'Samsung',
            'qyt' => 60,
            'tgl_pesan' => '2021-07-15'],

            ['nama_pelanggan' => 'Sila Ramadina',
            'nama_barang' => 'Vivo',
            'qyt' => 60,
            'tgl_pesan' => '2021-09-11'],

            ['nama_pelanggan' => 'Fitria Amelia',
            'nama_barang' => 'Samsung',
            'qyt' => 80,
            'tgl_pesan' => '2021-08-15'],

            ['nama_pelanggan' => 'Rifa Fauziah',
            'nama_barang' => 'Vivo',
            'qyt' => 100,
            'tgl_pesan' => '2021-10-01']
        ];

        DB::table('pesanans')->insert($pesanan);
    }
}

