<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_information', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id');
            $table->string('application_type',100);
            $table->string('unit_name',100)->nullable();
            $table->bigInteger('phone_no')->nullable();
            $table->bigInteger('telephone_no')->nullable();
            $table->string('email',100)->nullable();
            $table->string('entity_type',100)->nullable();
            $table->string('pan_no',100)->nullable();
            $table->string('gst_no',100)->nullable();
            $table->string('dsr_csr_status',100)->nullable();
            $table->string('dsr_csr_reg_no',100)->nullable();
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
        Schema::dropIfExists('basic_information');
    }
}
