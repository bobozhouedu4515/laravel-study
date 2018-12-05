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
         $this->call(UsersTableSeeder::class);

	    $this -> call (CategoriesTableSeeder::class);
	    //收到约束的必须放在最后,不然会无法迁移
	    $this -> call (ArticleTableSeeder::class);
	    $this -> call (RoleTableseeder::class);

    }
}
