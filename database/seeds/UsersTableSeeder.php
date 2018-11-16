<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    factory(\App\User::class, 25)->create();
	    $user =\App\User::find(1);
	    $user->name = 'bobozhou';
	    $user->email = '13934873532@163.com';
	    $user->password = bcrypt('admin888');
	    $user->superadmin = true;
	    $user->save();

    }
}
