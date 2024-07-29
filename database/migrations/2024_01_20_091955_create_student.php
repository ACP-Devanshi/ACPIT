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
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('rollno',50);
            $table->string('email',30)->unique();
            $table->string('fname',50);
            $table->string('mname',50);
            $table->integer('contact');
            $table->string('course',50);
            $table->string('dob',50);
            $table->string('regdate',50);
            $table->string('gender',50);
            $table->string('image',30);
            $table->string('qualification',30);
            $table->string('password',30);
            $table->longText('address');
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
        Schema::dropIfExists('student');
    }
};