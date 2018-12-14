<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
//        $this->command('----- Running Role Type Data Seeder -----');
        $this->call(CategorySeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
//        $this->command('----- Seeding Completed -----');
        Model::reguard();

    }
}
