<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('intro')->nullable(); 
            $table->string('sub_intro')->nullable(); 
            $table->text('tip_body')->nullable();                       
            $table->string('cover_image')->nullable();             
            $table->string('match_title')->unique()->nullable();;            
            $table->string('match_time')->nullable();
            $table->string('side_one')->nullable();
            $table->string('side_two')->nullable();          
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
        Schema::dropIfExists('tips');
    }
}
