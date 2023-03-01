<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_surname');
            $table->string('second_surname')->nullable();
            $table->string('email')->unique();
            $table->string('username');
            $table->string('password');
            $table->string('address');
            $table->string('phone');
            $table->unsignedBigInteger("role_id");
            $table->foreign("role_id")->references("id")->on("roles");
            $table->unsignedBigInteger("status_id");
            $table->foreign("status_id")->references("id")->on("status");
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
