<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Appartement',
        ]);
        DB::table('tags')->insert([
            'name' => 'F3',
        ]);
        DB::table('tags')->insert([
            'name' => 'Plage',
        ]);
        DB::table('tags')->insert([
            'name' => 're de chausee',
        ]);
    }
}
