<?php

namespace App\Providers;

use App\Models\Category;
use App\Observers\CategoryObserver;
use App\Observers\UserObserver;
use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    	//mysqle版本低于5.7.3 手册数据库中
	    Schema::defaultStringLength(191);
	    //注册观察者 手册 orm模型 中的observe
	    User::observe(UserObserver::class);
	    Category ::observe (CategoryObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
	    if ($this->app->environment() !== 'production') {
		    $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
	    }
        //
    }
}
