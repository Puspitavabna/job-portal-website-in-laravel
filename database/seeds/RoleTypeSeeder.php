<?php

use Illuminate\Database\Seeder;
use App\Models\RoleType;

class RoleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleType::truncate();
        RoleType::insert([
            [
                'id' => 1,
                'name' => 'client'
            ],
            [
                'id' => 2,
                'name' => 'freelancer'
            ]

    ]);


    }
}