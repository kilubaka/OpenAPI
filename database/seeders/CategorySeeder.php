<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (['Drama', 'Comedy', 'Factual', 'Entertainment', 'Sports', 'News', 'Music', 'Cartoon'] as $item) {
            Category::create([
                'name' => $item
            ]);
        }
    }
}
