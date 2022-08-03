<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'blog_id' =>rand(1,10),
            'user_id' =>rand(1,5),
            'type'    =>'like',
        ];
    }
}
