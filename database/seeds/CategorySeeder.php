<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Category::truncate();
       Category::insert([

           [
               'id' => '1',
               'parent_id' => null,
               'category_name' => 'Engineering',
               'description'=>null,
               'slug' =>'engineering'
           ],
           [
               'id' => '2',
               'parent_id' => null,
               'category_name' => 'Accounting',
               'description'=>null,
               'slug' => 'accounting'
           ],
           [
               'id' => '3',
               'parent_id' => null,
               'category_name' => 'NGO',
               'description'=>null,
               'slug' => 'ngo'
           ],
           [
               'id' => '4',
               'parent_id' => null,
               'category_name' => 'Textile',
               'description'=>null,
               'slug' => 'textile'
           ]

       ]);
    }
}
