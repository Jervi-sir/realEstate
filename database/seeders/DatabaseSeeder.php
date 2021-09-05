<?php

namespace Database\Seeders;

use Database\Seeders\TagSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\TypeSeeder;
use Database\Seeders\WilayaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $role = new RoleSeeder();
        $type = new TypeSeeder();
        $wilaya = new WilayaSeeder();
        $tag = new TagSeeder();

        $role->run();
        $type->run();
        $wilaya->run();
        $tag->run();

    }
}
