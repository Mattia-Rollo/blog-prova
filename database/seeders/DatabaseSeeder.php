<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        User::truncate();

        Category::truncate();

        Post::truncate();

        $user = User::factory()->create();

        // $category = Category::factory()->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'slug' => 'my-first-post',
            'title' => 'My First Post',
            'excerpt' => 'Breve descrizione',
            'body' => fake()->paragraph(30),
            'image' => 'https://picsum.photos/id/15/250/300'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'slug' => 'my-second-post',
            'title' => 'My Second Post',
            'excerpt' => 'Work excerpt',
            'body' => fake()->paragraph(30),
            'image' => 'https://picsum.photos/id/20/250/300'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'slug' => 'my-third-post',
            'title' => 'My Third Post',
            'excerpt' => 'third excerpt',
            'body' => fake()->paragraph(30),
            'image' => 'https://picsum.photos/id/30/250/300'
        ]);

    }
}