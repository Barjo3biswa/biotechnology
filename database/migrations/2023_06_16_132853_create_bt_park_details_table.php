<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBtParkDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bt_park_details', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id');
            $table->string('location',255)->nullable();
            $table->string('area_of_land',255)->nullable();
            $table->string('proff_of_land',255)->nullable();
            $table->string('description',255)->nullable();
            $table->string('project_report',255)->nullable();
            $table->string('noc_certificate',255)->nullable();
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
        Schema::dropIfExists('bt_park_details');
    }
}
