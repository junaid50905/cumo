<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            DoctorSeeder::class,
            ProjectSeeder::class,
            CourseSeeder::class,
            StudentSeeder::class,
            PaymentMethodSeeder::class,
            WarehouseSeeder::class,
            CategorySeeder::class,
            UnitSeeder::class,
            ProductSeeder::class,
            CustomerSeeder::class,
            StockSeeder::class,
            // SupplierSeeder::class,
            UnitSeeder::class,
            PaymentTypeSeeder::class,
            BudgetHeadSeeder::class,
            TaskTypeSeeder::class,
            ActivitySeeder::class,
            DomainSubdomainAreaActivitySeeder::class,
            CourseFeeHeaderSeeder::class,
        ]);
    }
}
