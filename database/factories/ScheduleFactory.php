<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $to = $this->faker->dateTimeThisMonth;

        return [
            'from' => $this->faker->dateTimeThisMonth($to),
            'to' => $to,
            'program_id' => random_int(1, 10),
            'leader_id' => random_int(1, 10),
        ];
    }
}
