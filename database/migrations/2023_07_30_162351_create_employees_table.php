<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('EmployeeID');
            $table->unsignedBigInteger('UserID');
            $table->string('EmployeeName', 100);
            $table->string('Address', 200);
            $table->string('ContactNumber', 20);
            $table->string('EducationalQualification', 100)->nullable();
            $table->string('EmployeeCode', 20);
            $table->string('Department', 100);
            $table->string('Role', 50);
            $table->string('Grade', 50)->nullable();
            $table->string('Client', 100)->nullable();
            $table->text('Achievements')->nullable();
            $table->string('Photo', 50)->nullable();
            $table->timestamps();

            $table->foreign('UserID')->references('UserID')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
