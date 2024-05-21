<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            $custom[$i] = [
                'title' => "warehouse_00$i"
            ];
        }
//        dd($custom);
        DB::table('warehouses')->insert($custom ?? []);

//        Warehouse::factory()->count(20)->create();
    }
}
