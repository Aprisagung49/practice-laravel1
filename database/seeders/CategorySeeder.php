<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Category::factory(3)->create()
        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web-design'
        ]);
        Category::create([
            'name' => 'Web Dev',
            'slug' => 'Web-dev'
        ]);
        Category::create([
            'name' => 'UX UI',
            'slug' => 'ui-ux'
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);
        Category::create([
            'name' => 'Data Scient',
            'slug' => 'data-scient'
        ]);
    }
}
