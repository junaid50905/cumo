<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Utility\DomainSubdomainAreaActivity;
class DomainSubdomainAreaActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //Task::factory()->count(60)->create();
        $all_task = new DomainSubdomainAreaActivity;
        $all_task->iterateArr();
    }
}
