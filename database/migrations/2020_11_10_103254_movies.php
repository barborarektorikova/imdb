<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->('movie_type_id') unsigned big integer
            $table->movie_status_id unsigned big integer
            $table->name string
            $table->length integer
            $table->year year
            $table->start_year year
            $table->end_year year
            $table->rating float
            $table->votes_nr integer
            $table->metascore integer
            $table->certification_id unsigned big integer
            $table->budget unsigned big integer
            $table->budget_currency string
            $table->color_code string
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
