<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wilayas')->insert([
            'number' => '13',
            'name' => 'Tlemcen',
        ]);

        DB::table('wilayas')->insert([
            'number' => '15',
            'name' => 'Tizi',
        ]);

        DB::table('wilayas')->insert([
            'number' => '16',
            'name' => 'Alger',
        ]);

        DB::table('wilayas')->insert([
            'number' => '17',
            'name' => 'Djelfa',
        ]);

        DB::table('wilayas')->insert([
            'number' => '31',
            'name' => 'Oran',
        ]);

        DB::table('wilayas')->insert([
            'number' => '46',
            'name' => 'Ain temouchent',
        ]);

        DB::table('wilayas')->insert([
            'number' => '47',
            'name' => 'Ghardaia',
        ]);

    }
}
