<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncubatorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incubator_details', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id');
            $table->string('location_address');
            $table->string('area_office_space');
            $table->string('proff_of_land_incubator');
            $table->string('incubator_description');
            $table->string('detailed_project_report');
            $table->string('incubator_noc');
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
        Schema::dropIfExists('incubator_details');
    }
}
