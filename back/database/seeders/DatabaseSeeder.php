<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        User::factory(10)->create();
        Post::factory(10)->create();    

        // $this->call([UserSeeder::class,
                    //  PostSeeder::class]); // qikjo osht mrena folderit seeders
       
    }
}
