<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama' => 'Silvi Lestari',
            'jns_kelamin' => 'Perempuan',
            'alamat' => 'Sukamenak',
            'kode_pos' => '40228',
            'kota' => 'Bandung',
            'tgl_lahir' => '2003-06-11'],

            ['nama' => 'Dina Amelia',
            'jns_kelamin' => 'Perempuan',
            'alamat' => 'Babakan Nugraha',
            'kode_pos' => '40239',
            'kota' => 'Bandung',
            'tgl_lahir' => '2004-07-15'],

            ['nama' => 'Sila Ramadina',
            'jns_kelamin' => 'Perempuan',
            'alamat' => 'Katapang',
            'kode_pos' => '40220',
            'kota' => 'Bandung',
            'tgl_lahir' => '2004-09-11'],

            ['nama' => 'Fitria Amelia',
            'jns_kelamin' => 'Perempuan',
            'alamat' => 'Sadang',
            'kode_pos' => '40328',
            'kota' => 'Bandung',
            'tgl_lahir' => '2004-08-15'],

            ['nama' => 'Rifa Fauziah',
            'jns_kelamin' => 'Perempuan',
            'alamat' => 'Cibogo',
            'kode_pos' => '40308',
            'kota' => 'Bandung',
            'tgl_lahir' => '2004-10-01']
        ];

        DB::table('pembelis')->insert($pembeli);
    }
}


