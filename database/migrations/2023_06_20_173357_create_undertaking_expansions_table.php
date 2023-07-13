<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUndertakingExpansionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('undertaking_expansions', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id');
            $table->string('no_of_employee')->nullable();
            $table->string('annual_epf')->nullable();
            $table->string('electricity_consupt')->nullable();
            $table->string('current_area')->nullable();
            $table->string('year_i')->nullable();
            $table->string('year_ii')->nullable();
            $table->string('year_iii')->nullable();
            $table->string('vat_year_i')->nullable();
            $table->string('vat_year_ii')->nullable();
            $table->string('vat_year_iii')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('undertaking_expansions');
    }
}
