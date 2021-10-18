<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama' => 'Silvi Lestari',
            'alamat' => 'Sukamenak',
            'kode_pos' => '40228',
            'kota' => 'Bandung'],

            ['nama' => 'Dina Amelia',
            'alamat' => 'Babakan Nugraha',
            'kode_pos' => '40239',
            'kota' => 'Bandung'],

            ['nama' => 'Sila Ramadina',
            'alamat' => 'Katapang',
            'kode_pos' => '40220',
            'kota' => 'Bandung'],

            ['nama' => 'Fitria Amelia',
            'alamat' => 'Sadang',
            'kode_pos' => '40328',
            'kota' => 'Bandung'],

            ['nama' => 'Rifa Fauziah',
            'alamat' => 'Cibogo',
            'kode_pos' => '40308',
            'kota' => 'Bandung']
        ];

        DB::table('supliers')->insert($suplier);
    }
}



