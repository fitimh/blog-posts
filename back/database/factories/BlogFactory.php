<?php
namespace Database\Factories;

use App\Models\Blog;

use Illuminate\Support\Str;

// use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory

{
    protected $model = Blog::class;

    public function definition()
    {


        return [

            'title' => $this->faker->sentence(3, true),
            'desc' => $this->faker->realText($this->faker->numberBetween(10, 100)),

        ];
    }
}
