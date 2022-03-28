<?php

namespace Database\Seeders;

use App\Models\Leader;
use App\Models\Program;
use App\Models\Schedule;
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
        $this->call([
            CategorySeeder::class,
        ]);

        Program::factory(10)->create();
        Leader::factory(10)->create();
        Schedule::factory(25)->create();
    }
}
