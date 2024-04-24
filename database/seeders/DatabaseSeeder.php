<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Models\User::factory(10)->create();
        Models\Post::factory(10)->create();
    }
}
