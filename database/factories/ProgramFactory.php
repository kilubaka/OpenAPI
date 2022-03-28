<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Program::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2,5),
            'description' => $this->faker->text,
            'category_id' => random_int(1, 8),
            'age_restriction' => random_int(2, 18),
            'cost' => random_int(1000, 1000 * 1000) / 2,
        ];
    }
}
