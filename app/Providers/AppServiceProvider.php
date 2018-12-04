<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Config;
use App\Notifications\CommentNotify;
use App\Observers\CategoryObserver;
use App\Observers\CommentObserve;
use App\Observers\ConfigObserver;
use App\Observers\UserObserver;
use App\User;
use Carbon\Carbon;
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
	    //设置时间的库 设置当前时间是中文显示!
	    Carbon ::setLocale ('zh');
//	    注册评论观察者
	    Comment ::observe (CommentObserve::class);
	    Config ::observe (ConfigObserver::class);

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
