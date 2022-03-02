<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'blogu i pare',
            'content' => 'une jam blogu i pare i krijaur per eample te matemaiktes',
        ]);
    }
}

