<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponseNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_news', function (Blueprint $table) {
        	$table->engine='InnoDB';
            $table->increments('id');
	        $table -> unsignedInteger ('rule_id') ->default ('0') -> comment ('对应的规则');
	        $table -> foreign ('rule_id')
	        -> references ('id') -> on ('rules')
	        ->onDelete('cascade');
	        $table -> text ('data') -> comment ('回复图文内容');
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
        Schema::dropIfExists('response_news');
    }
}
