<?php

use Illuminate\Database\Seeder;

class productlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\productline::class,10)->create();
    }
}
