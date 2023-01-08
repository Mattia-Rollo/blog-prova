<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            
            'user_id' => User::factory()->create(),
            'category_id' => Category::factory()->create(),
            'slug' => fake()->slug,
            'title' => fake()->sentence,
            'excerpt' => fake()->sentence(),
            'body' => fake()->paragraph,
            'image' => fake()->imageUrl(360, 360, 'animals', true, 'dogs', true),
        ];
    }
}
