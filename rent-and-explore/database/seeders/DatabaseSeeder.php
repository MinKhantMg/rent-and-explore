<?php

namespace Database\Seeders;


use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Review::factory()->count(10)->create();

        User::factory()->create([
            "name" => "admin",
            "email" => "admin@gmail.com",
        ]);

    }
}
