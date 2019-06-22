<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contest_projects', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->integer('user_id')->unsigned()->nullable(); 
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->integer('url')->unique();
            $table->text('details')->nullable(); 
            $table->text('rules')->nullable(); 
            $table->integer('entries')->nullable();
            $table->string('image')->nullable();  
            $table->string('video')->nullable();  
            $table->boolean('sitedisplay')->default(true); 
            $table->boolean('frontdisplay')->default(false);
            $table->boolean('status')->default(true);  
            $table->datetime('displayuptil')->nullable();          
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
        Schema::dropIfExists('contest_projects');
    }
}
