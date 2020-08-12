<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
			$table->string('task_name');
			$table->string('lead_name');
			$table->integer('user_id')->unsigned();
			$table->enum('priority', ['High', 'Medium', 'Low']);
			$table->enum('status', ['Assigned', 'Started', 'Finished']);
            $table->timestamps();
        });
		Schema::table('tasks',function($table){
			$table->foreign('user_id')->references('id')->on('users');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
