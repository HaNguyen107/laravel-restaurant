<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersUpdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->boolean('gender')->change();
            $table->string('phone')->change();
            $table->string('address')->change();
            $table->integer('role')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('gender')->change();
            $table->string('phone')->change();
            $table->string('address')->change();
            $table->integer('role')->change();
        });
    }
}
