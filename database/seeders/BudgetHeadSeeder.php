<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BudgetHeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $budgetHeads = [
            [
                'title' => '7040::Rental Expenses', 
                // 'parent' => '0',
                'indent' => '1',
                'description' => 'Demo'
            ],
            [
                'title' => '6100::Marketing, sales and distribution expenses',
                // 'parent' => '1', 
                'indent' => '1',
                'description' => 'Demo'
            ],
            [
                'title' => '7000::Overhead Costs', 
                // 'parent' => '1',
                'indent' => '1',
                'description' => 'Demo',
            ],
            [
                'title' => '7500::Payroll Expenses', 
                // 'parent' => '1',
                'indent' => '1',
                'description' => 'Demo'
            ],
            [
                'title' => '6400::Programme related other expenses',
                // 'parent' => '1', 
                'indent' => '1',
                'description' => 'Demo'
            ],
        ];

        DB::table('budget_heads')->insert($budgetHeads);
    }
}
