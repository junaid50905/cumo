<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            [
                'name' => 'KG', 'small_unit' => 'gm'
            ],
            [
                'name' => 'Liter',
                'small_unit' => '',
            ],
            [
                'name' => 'piece',
                'small_unit' => '',
            ]
        ];

        DB::table('units')->insert($units);
    }
}
