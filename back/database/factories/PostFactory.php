<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
// use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory

{
    protected $model = Post::class;
    
 
    public function definition()
    { 
        return [
            
            'title' =>$this->faker->sentence(3, true),
            'content' =>$this->faker->realText($this->faker->numberBetween(10, 100)),

        ];

    }
}
