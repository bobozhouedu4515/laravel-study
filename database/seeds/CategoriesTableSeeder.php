<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    foreach(['程序人生','桌面文化','技术分享','问答求助','码农生活'] as $v) {
		    DB ::table ('categories')
		    -> insert ([
		    'title' => $v,
		    'icon' => 'fa fa-bar-chart-o',
		    ]);
	    }
    }
}
