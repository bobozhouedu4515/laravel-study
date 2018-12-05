<?php

use Illuminate\Database\Seeder;

class RoleTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    \Spatie\Permission\Models\Role::create([
	    'title'=>'站长',
	    'name'=>'webmaster'
	    ]);

    }
}
