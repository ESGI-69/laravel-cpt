<?php

namespace Database\Seeders;

use App\Models\Crime;
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
        Crime::factory(1)->create();
    }
}
