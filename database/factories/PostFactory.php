<?php

namespace Database\Factories;

use App\Enums\PostStatus;
use App\Enums\PostType;
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
            'user_id' => 1,
            'title' => $this->faker->text(100),
            'description' => $this->faker->text(),
            'body' => $this->faker->realText(),
            'pin' => 0,
            'options' => [],
            'publish_at' => $this->faker->dateTime,
            'type' => PostType::POST,
            'status' => PostStatus::PUBLISHED,
        ];
    }
}
