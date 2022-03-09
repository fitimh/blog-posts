<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'title' => 'blogu i pare',
            'desc' => 'une jam blogu i pare i krijaur per eample te matemaiktes',
        ]);
    }
}

