<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keywords', function (Blueprint $table) {
            $table->engine='InnoDB';
        	$table->increments('id');
            $table->unsignedInteger ('rule_id')->index ()->default (0)->comment ('关键词对应的规则');
	        $table->foreign ('rule_id')
		        ->references('id')->on('rules')
		        ->onDelete('cascade');
	        $table->string ('key')->default ('')->comment ('关键词') ;
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
        Schema::dropIfExists('keywords');
    }
}
