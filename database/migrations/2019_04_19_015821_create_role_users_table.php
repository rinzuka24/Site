<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('role_users', function (Blueprint $table) {
        //     $table->unsignedBigInteger('user_id')->unique();
        //     $table->unsignedBigInteger('role_id')->unique();
        //     $table->timestamps();

        //     $table->unique(['user_id','role_id']);
        //     $table->foreign('user_id')->references('id')->on('users');
        //     $table->foreign('role_id')->references('id')->on('roles');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('role_users')) {
         Schema::table('role_users',function(Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropForeign(['role_id']);
         });
        }

        Schema::dropIfExists('role_users');
    }
}
