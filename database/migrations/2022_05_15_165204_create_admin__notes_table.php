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
    /**
     * 
     *Unused
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin__notes', function (Blueprint $table) {
            $table->id();
            $table->text('notes');
            $table->timestamps();
        });
        Schema::table('admin__notes',function(Blueprint $table){
        	$table->unsignedBigInteger('admin_id');
        	$table->foreign('admin_id')->references('id')
     			->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin__notes');
    }
};
