<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('priority')->nullable()->comment('Low Normal High Urgent');
            $table->bigInteger('status')->unsigned()->nullable();
            $table->bigInteger('type_id')->unsigned();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('complete_date')->nullable();
            $table->string('contact_type')->nullable()->comment('Lead Opportunity Customer Close');
            $table->bigInteger('contact_id')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('created_by_id')->unsigned();
            $table->bigInteger('modified_by_id')->unsigned()->nullable();
            $table->bigInteger('assigned_user_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('status')->references('id')->on('task_status')->onDelete('set null');
            $table->foreign('type_id')->references('id')->on('task_type');
            $table->foreign('contact_id')->references('id')->on('contact')->onUpdate('set null')->onDelete('set null');
            $table->foreign('created_by_id')->references('id')->on('users');
            $table->foreign('modified_by_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('assigned_user_id')->references('id')->on('users');
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task');
    }
}
