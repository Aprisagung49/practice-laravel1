<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $Apris = User::create([
        //     'name' => 'Apris Agung Wiresa',
        //     'username' => 'aprisagung48',
        //     'email' => 'aprisagung@exmple.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Category::create([
        //     'name' => 'web design',
        //     'slug' => 'web-desain'
        // ]);

        // Post::create([
        //     'title' => 'WEB DEVELOVER NOW',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'web-dev-now',
        //     'body' => 'Web development is a growing field with many trends, including mobile-first internet, cloud computing, and artificial intelligence. Web developers are in high demand as businesses need websites and apps to reach customers online.'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
            // $Apris,
        ])->create();
    }
}
