<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_name');
            $table->longText('description');
            $table->decimal('project_fee', 19,0);
            $table->bigInteger('employer_id')->unsigned();
            $table->bigInteger('employee_id')->unsigned()->nullable();
            $table->bigInteger('skill_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('employer_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            
            $table->foreign('employee_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->foreign('skill_id')
                    ->references('id')
                    ->on('skills')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
