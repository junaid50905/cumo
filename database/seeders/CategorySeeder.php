<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Category::count()) {
            for ($i = 0; $i < 10; $i++) {
                $custom[] = [
                    'name'            => "Category_$i",
                    'parent_category_id' => null,
                ];
            }

            DB::table('categories')->insert($custom ?? []);
        }

        $numberOfExistingCategories = Category::count();

        for ($i = $numberOfExistingCategories; $i < $numberOfExistingCategories+10; $i++) {
            $custom[] = [
                'name'            => "Category_$i",
                'parent_category_id' => Category::inRandomOrder()->first()->id,
            ];
        }

        DB::table('categories')->insert($custom ?? []);
    }
}
