<?php

use Illuminate\Database\Seeder;

class officeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\office::class,10)->create();
    }
}
