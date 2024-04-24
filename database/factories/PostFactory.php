<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(),
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'description' => $this->faker->sentence(),
            'published' => $this->faker->boolean(),
            'user_id' => Models\User::inRandomOrder()->first()->id,
        ];
    }
}
