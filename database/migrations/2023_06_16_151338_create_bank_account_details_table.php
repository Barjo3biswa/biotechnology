<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankAccountDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_account_details', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id');
            $table->string('ac_hol_name',255)->nullable();
            $table->string('bank_name',255)->nullable();
            $table->string('account_number',255)->nullable();
            $table->string('ifsc_code',255)->nullable();
            $table->string('rtgs_dts',255)->nullable();
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
        Schema::dropIfExists('bank_account_details');
    }
}
