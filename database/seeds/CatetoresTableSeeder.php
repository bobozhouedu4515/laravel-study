<?php

use Illuminate\Database\Seeder;

class CatetoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	   factory (CatetoresTableSeeder::class,20)->create ();
    }
}
