<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
	        $table -> string ('title') -> comment ('文章标题');
	        $table->unsignedTinyInteger ('user_id')->index ()->comment ('文章作者');
	        $table -> foreign ('user_id')
	        -> references ('id') -> on ('users')
	        -> onDelete ('cascade');
	        $table->unsignedTinyInteger ('category_id')->index ()->comment ('栏目标题');
	        $table -> foreign ('category_id')
	        -> references ('id') -> on ('categories')
	        -> onDelete ('cascade');
	        $table->text ('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
