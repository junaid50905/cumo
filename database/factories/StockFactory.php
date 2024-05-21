<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Project;
use App\Models\Stock;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $projectId   = Project::inRandomOrder()->first()->id;
        $productId   = Product::inRandomOrder()->first()->id;
        $warehouseId = Warehouse::inRandomOrder()->first()->id;

        $mapping = [
            'project_id'   => $projectId,
            'product_id'   => $productId,
            'warehouse_id' => $warehouseId,
        ];

        if (!Stock::where($mapping)->first()) {
            return array_merge(['qty' => rand(20, 100)], $mapping);
        }
    }
}
