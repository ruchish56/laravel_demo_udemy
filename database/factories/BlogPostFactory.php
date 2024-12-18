<?php

namespace Database\Factories;

use BlogPosts;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = BlogPosts::class;
    
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->content,
            'is_new' => $this->faker->boolean("true","false"),
        ];
    }
}
