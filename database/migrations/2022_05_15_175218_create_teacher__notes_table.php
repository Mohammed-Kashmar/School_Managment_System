<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*
    *
    Unused
    *
    */
    public function up()
    {
        Schema::create('teacher__notes', function (Blueprint $table) {
            $table->id();
            $table->text('notes');
            $table->timestamps();
        });
        Schema::table('teacher__notes',function(Blueprint $table){
        	$table->unsignedBigInteger('teacher_id');
        	$table->foreign('teacher_id')->references('id')
     			->on('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher__notes');
    }
};
