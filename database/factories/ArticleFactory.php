<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->title(),
            "content" => $this->faker->text(300),
            "is_published" => rand(0, 1),
            "likes" => rand(0, 10_000),
            "slug" => str_replace(" ", "-", strtolower($this->faker->title() . rand(0, 100))),
            "user_id" => rand(1, 2),
        ];
    }
}
