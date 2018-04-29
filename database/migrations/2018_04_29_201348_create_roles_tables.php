<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTables extends Migration
{
    /**
     *  Run the migrations.
     *  Created: 29 April 2018
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');  // superadmin, admin, editor, manager
            $table->string('label')->nullable();
            $table->timestamps();           
        });
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); // can-edit-tip
            $table->string('label')->nullable(); // Edit Tip
            $table->timestamps();           
        }); 
        
        // pivot of role to permission
        Schema::create('permission_role', function (Blueprint $table) {
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();   
            // cascade on delete of permission
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            // cascade on delete of role            
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');            
            $table->string('label')->nullable(); // edit tip
            $table->primary(['permission_id','role_id']);      
        });  
        
        // pivot of user to role 
        Schema::create('role_user', function (Blueprint $table) {
            $table->integer('role_id')->unsigned();
            $table->integer('user_id')->unsigned();   
            // cascade on delete of user
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            // cascade on delete of role            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');            
            $table->string('label')->nullable(); // edit tip    
            $table->primary(['role_id', 'user_id']);                   
        });          
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles'); 
        Schema::dropIfExists('permissions'); 
        Schema::dropIfExists('permission_role'); 
        Schema::dropIfExists('role_user');        
    }
}
