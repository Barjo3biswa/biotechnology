<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorsPromotersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors_promoters', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id');
            $table->string('name',200)->nullable();
            $table->string('din_pan_no',20)->nullable();
            $table->string('email',200)->nullable();
            $table->bigInteger('contact_no')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('directors_promoters');
    }
}
