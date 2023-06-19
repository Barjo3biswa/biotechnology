<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('application_no',20)->nullable();
            $table->string('application_type',100);
            $table->string('sub_application_type',100)->nullable();
            $table->boolean('basic_info')->default(0);
            $table->boolean('details')->default(0);
            $table->boolean('diversification')->default(0);
            $table->boolean('coast')->default(0);
            $table->boolean('financing')->default(0);
            $table->boolean('scheme')->default(0);
            $table->boolean('bank')->default(0);
            $table->string('application_status',100)->nullable();
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
        Schema::dropIfExists('applications');
    }
}
