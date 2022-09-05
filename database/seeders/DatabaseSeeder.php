<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(PhotoSeeder::class);
        $this->call(LedSeeder::class);
        $this->call(ProjectorSeeder::class);
        $this->call(GallerySeeder::class);
    }
}
