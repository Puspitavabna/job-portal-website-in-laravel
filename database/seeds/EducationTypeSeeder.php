<?php
use Illuminate\Database\Seeder;
use App\Models\EducationType;

class EducationTypeSeeder extends Seeder
{
    public function run()
    {
        EducationType::truncate();
        EducationType:: insert([
            [
                'id' => '1',
                'title' => 'Secondary School/High School',
                'description' => 'NULL',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()

            ],
            [
                'id' => '2',
                'title' => 'College',
                'description' => 'NULL',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()

            ],
            [
                'id' => '3',
                'title' => 'Bachelor',
                'description' => 'NULL',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()

            ],
            [
                'id' => '4',
                'title' => 'Masters',
                'description' => 'NULL',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()

            ],
            [
                'id' => '5',
                'title' => 'Other',
                'description' => 'NULL',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()

            ]

        ]);
    }
}