<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_permissions', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
			$table->integer('permission_id')->unsigned();
			
            $table->primary(['user_id','permission_id']);
        });
		Schema::table('users_permissions',function($table){
			$table->foreign('user_id')->references('id')->on('users');
			//$table->foreign('permission_id')->references('id')->on('permissions');
		});
		Schema::table('users_permissions',function($table){
			$table->foreign('permission_id')->references('id')->on('permissions');
			//$table->foreignId('permission_id')->constrained();
		});
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_permissions');
    }
}
