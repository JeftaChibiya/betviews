<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stakes', function (Blueprint $table) {
            $table->increments('id');      
            $table->string('bet_market'); 
            $table->string('bookmaker');      
            $table->string('odds');                         
            $table->string('stake_analysis');                       
            $table->string('fb_likes')->nullable();            
            $table->timestamps();
        });

        Schema::create('stake_tip', function(Blueprint $table){
            $table->integer('tip_id')->unsigned()->index();
            $table->foreign('tip_id')->references('id')->on('tips')->onDelete('cascade');
            $table->integer('stake_id')->unsigned()->index(); 
            $table->foreign('stake_id')->references('id')->on('stakes')->onDelete('cascade');              
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
        Schema::dropIfExists('stakes');
        Schema::dropIfExists('stake_tip');        
    }
}
