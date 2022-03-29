<?php

namespace Database\Seeders;

use App\Models\Leader;
use App\Models\Program;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
        ]);

        $this->call([
            CategorySeeder::class,
        ]);

        Program::factory(10)->create();
        Leader::factory(10)->create();
        Schedule::factory(25)->create();
    }
}
