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
            $table->foreignId('category_id')->constrained("categories");
            $table->foreignId('level_id')->constrained("levels");
            $table->foreignId('industry_id')->constrained("industries");
            $table->foreignId('qualification_id')->constrained("qualifications");
            $table->text('job_description');
            $table->text('skills_required');
            $table->float('offered_salary');
            $table->integer('experience');
            $table->smallInteger('gender');
            $table->smallInteger("status")->default(config('options.status.active'));
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
