<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $count = 0;
        $count++;
        $parentCategoriesId = Category::count() > 10 ? Category::inRandomOrder()->first()->id : null;
        return [
            'name' => $categories[$count++],
            'created_by' => User::inRandomOrder()->first()->id,
            'type' => 'action',
            'parent_category_id' => $parentCategoriesId,
        ];
    }
}
