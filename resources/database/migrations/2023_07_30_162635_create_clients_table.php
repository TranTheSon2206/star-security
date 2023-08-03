<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('ClientID');
            $table->string('ClientName', 100);
            $table->text('ServicesAvailed')->nullable();
            $table->unsignedBigInteger('StaffAssigned')->nullable();
            $table->timestamps();

            $table->foreign('StaffAssigned')->references('EmployeeID')->on('employees');
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
