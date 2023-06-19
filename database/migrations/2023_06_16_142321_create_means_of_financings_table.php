<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeansOfFinancingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('means_of_financings', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id');
            $table->string('tot_coast',255)->nullable();
            $table->string('promoters_contribution',255)->nullable();
            $table->string('enterprise_contribution' ,255)->nullable();
            $table->string('expect_from_ass_gov' ,255)->nullable();
            $table->string('expect_from_oth_gov' ,255)->nullable();
            $table->string('loan_selection_letter',255)->nullable();
            $table->string('total',255)->nullable();
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
        Schema::dropIfExists('means_of_financings');
    }
}
