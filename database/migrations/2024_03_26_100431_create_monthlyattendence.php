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
        Schema::create('monthlyattendence', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('rollno',50);
            $table->string('1th',20)->default('A');;
            $table->string('2th',20)->default('A');;
            $table->string('3th',20)->default('A');;
            $table->string('4th',20)->default('A');;
            $table->string('5th',20)->default('A');;
            $table->string('6th',20)->default('A');;
            $table->string('7th',20)->default('A');;
            $table->string('8th',20)->default('A');;
            $table->string('9th',20)->default('A');;
            $table->string('10th',20)->default('A');;
            $table->string('11th',20)->default('A');;
            $table->string('12th',20)->default('A');;
            $table->string('13th',20)->default('A');;
            $table->string('14th',20)->default('A');;
            $table->string('15th',20)->default('A');;
            $table->string('16th',20)->default('A');;
            $table->string('17th',20)->default('A');;
            $table->string('18th',20)->default('A');;
            $table->string('19th',20)->default('A');;
            $table->string('20th',20)->default('A');;
            $table->string('21th',20)->default('A');;
            $table->string('22th',20)->default('A');;
            $table->string('23th',20)->default('A');;
            $table->string('24th',20)->default('A');;
            $table->string('25th',20)->default('A');;
            $table->string('26th',20)->default('A');;
            $table->string('27th',20)->default('A');;
            $table->string('28th',20)->default('A');;
            $table->string('29th',20)->default('A');;
            $table->string('30th',20)->default('A');;
            $table->string('31th',20)->default('A');;
            $table->integer('total');
            $table->integer('percentage');
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
        Schema::dropIfExists('monthlyattendence');
    }
};
