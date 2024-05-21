<?php

namespace Database\Seeders;

use App\Models\TaskType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ['Pre-Vocational', 'Vocational', 'Independent', 'Karishma'];

        foreach ($items as $key => $item) {
            $custom[$key]['title'] = $item;
        }

        DB::table((new TaskType())->getTable())->insert($custom ?? []);
    }
}
