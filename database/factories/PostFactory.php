<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(),
            'slug' => fake()->slug(),
            'category' => fake()->randomElement(['berita', 'agenda', 'pengumuman']),
            'image' => 'posts/ML5f4Mdg4sYbOKzMpwhaIwqYOYBB9qdUqYEOYjrs.jpg',
        ];
    }
}
