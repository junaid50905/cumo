<?php

namespace Database\Factories;

use App\Models\Unit;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'code' => $this->faker->unique()->postcode,
            'category_id' => Category::inRandomOrder()->first()->id,
            'unit_id' => Unit::inRandomOrder()->first()->id,
            'selling_price' => rand(80, 100),
            'making_cost' => rand(20, 80),
            'expiry_alert' => rand(1, 5),
            'current_price' => $this->faker->randomDigit(15),
        ];
    }
}
