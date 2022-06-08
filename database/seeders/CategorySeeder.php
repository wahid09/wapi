<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::updateOrCreate([
            'name' => 'Dashboard',
            'name_bn' => 'Dashboard',
            'slug'  => 'dashboard'
        ]);
        Category::updateOrCreate([
            'name' => 'Category1',
            'name_bn' => 'Category1',
            'slug'  => 'category_1'
        ]);
        Category::updateOrCreate([
            'name' => 'Category2',
            'name_bn' => 'Category2',
            'slug'  => 'category_2'
        ]);
        Category::updateOrCreate([
            'name' => 'Category3',
            'name_bn' => 'Category3',
            'slug'  => 'category_3'
        ]);
    }
}