<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponseTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('response_texts', function (Blueprint $table) {
           $table->engine='InnoDB';
            $table->increments('id');
	        $table -> unsignedInteger ('rule_id') -> index () ->default (0) -> comment ('规则主键');
	        $table->foreign ('rule_id')
		        ->references('id')->on('rules')
		        ->onDelete('cascade');
	        $table -> text ('content') -> comment ('回复内容');
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
        Schema::dropIfExists('response_texts');
    }
}
