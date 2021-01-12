<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('vacancy_id');
            $table->text('job_description');
            $table->text('skills_required');
            $table->integer('offered_salary');
            $table->integer('experience');
            $table->string('gender');
            $table->string('industry');
            $table->string('qualification');
            $table->string('level');
            $table->string('path')->nullable();
            $table->string('email');
            $table->integer('phone_number');
            $table->text('message');
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
        Schema::dropIfExists('vacancies');
    }
}
