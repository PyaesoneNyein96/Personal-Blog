<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->word,
            'content'=>$this->faker->paragraph,
            'category_id'=>rand(1,3),
            'user_id' =>rand(1,3),
        ];
    }
}
