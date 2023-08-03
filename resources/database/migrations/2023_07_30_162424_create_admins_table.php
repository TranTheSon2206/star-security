<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('AdminID');
            $table->unsignedBigInteger('UserID');
            $table->string('AdminName', 100);
            $table->string('Department', 100);
            $table->timestamps();

            $table->foreign('UserID')->references('UserID')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
