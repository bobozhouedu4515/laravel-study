<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePraisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('praises', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger ('user_id')->index ()->comment ('赞用户id');
            $table->unsignedInteger ('praise_id')->index ()->comment ('被点赞的模型的id');
            $table->string('praise_type')->index ()->comment ('赞的文章中');
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
        Schema::dropIfExists('praises');
    }
}
