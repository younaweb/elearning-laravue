<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use App\Models\Video;
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
        Course::factory(20)->create();
        Video::factory(200)->create();
    }
}
