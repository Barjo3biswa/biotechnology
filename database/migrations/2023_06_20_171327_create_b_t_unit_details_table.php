<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBTUnitDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_t_unit_details', function (Blueprint $table) {
            $table->id();
            $table->string('application_id')->nullable();
            $table->string('unit_expansion')->nullable();
            $table->string('location_ib')->nullable();
            $table->string('office_space')->nullable();
            $table->string('proff_of_land_doc')->nullable();
            $table->string('description_ib')->nullable();
            $table->string('noc_ib')->nullable();
            $table->string('report_ib')->nullable();
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
        Schema::dropIfExists('b_t_unit_details');
    }
}
