<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name' => $this->faker->name,
        'organization' => $this->faker->title,
        'contact' => rand(1, 100),
        'address' =>  $this->faker->name,
        'experties' => $this->faker->title,
        ];
    }
}
