<?php

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
        // $this->call(UserSeeder::class);
        $this->call(customerSeeder::class);
        $this->call(employeeSeeder::class);
        $this->call(officeSeeder::class);
        $this->call(order_productSeeder::class);
        $this->call(orderSeeder::class);
        $this->call(paymentSeeder::class);
        $this->call(productlineSeeder::class);
        $this->call(productSeeder::class);
    }
}
