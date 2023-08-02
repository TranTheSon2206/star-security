<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id('TestimonialID');
            $table->unsignedBigInteger('ClientID');
            $table->text('TestimonialText');
            $table->date('DateAdded');
            $table->timestamps();

            $table->foreign('ClientID')->references('ClientID')->on('clients');
        });
    }

    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
}
