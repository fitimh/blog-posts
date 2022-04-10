<?php

namespace Database\Seeders;


use App\Models\Blog;
use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(User::count()) {
            return;
        }
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin'),
            'role' => 2
        ]);
        User::factory(10)->create();


        Blog::factory(10)->create();

        // $this->call([UserSeeder::class,
                    //  PostSeeder::class]); // qikjo osht mrena folderit seeders

    }
}
