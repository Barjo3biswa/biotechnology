<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialProjectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_projections', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id');
            $table->string('master_id')->nullable();
            $table->string('master_name')->nullable();
            $table->string('year_i')->nullable();
            $table->string('year_ii')->nullable();
            $table->string('year_iii')->nullable();
            $table->string('year_iv')->nullable();
            $table->string('year_v')->nullable();
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
        Schema::dropIfExists('financial_projections');
    }
}
