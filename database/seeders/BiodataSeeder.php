<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio = [
            ['nama' => 'Silvi Lestari',
            'gender' => 'Female',
            'bornDate' => '2003-06-11',
            'weight' => 50,
            'height' => 153],
            ['nama' => 'Dina Amelia',
            'gender' => 'Female',
            'bornDate' => '2004-06-11',
            'weight' => 50,
            'height' => 153]
        ];

        DB::table('biodatas')->insert($bio);
    }
}


// php artisan db:seed
