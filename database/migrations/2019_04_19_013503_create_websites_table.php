<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('websites', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('url')->unique();
        //     $table->boolean('published')->default(false);
            
        //     $table->unsignedBigInteger('user_id');
        //     $table->timestamps();

        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // if (Schema::hasTable('websites')) {
        //  Schema::table('websites',function(Blueprint $table){
        //     $table->dropForeign(['user_id']);
        //  });
        // }
        
        Schema::dropIfExists('websites');
    }
}
