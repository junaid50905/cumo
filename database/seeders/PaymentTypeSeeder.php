<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_types')->insert([
            'title' => 'Cash Payment',
        ]);
        DB::table('payment_types')->insert([
            'title' => 'Advance Payment',
        ]);
        DB::table('payment_types')->insert([
            'title' => 'Bank to bank Transfer',
        ]);
    }
}
