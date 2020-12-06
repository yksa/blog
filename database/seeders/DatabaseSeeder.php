<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Article::factory(20)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Comment::factory(200)->create();
        \App\Models\User::factory(1)->create([
            "name" => "Alice",
            "email" => "alice@gmail.com"
        ]);
        \App\Models\User::factory(1)->create([
            "name" => "Bob",
            "email" => "bob@gmail.com"
        ]);
    }
}
