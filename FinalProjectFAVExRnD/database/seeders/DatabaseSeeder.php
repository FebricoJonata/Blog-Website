<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        Category::create([
            'name' => 'Programming'
        ]);

        Category::create([
            'name' => 'Personal'
        ]);

        Category::create([
            'name' => 'Bussines'
        ]);

        Post::factory(20) -> create();
    }
}
