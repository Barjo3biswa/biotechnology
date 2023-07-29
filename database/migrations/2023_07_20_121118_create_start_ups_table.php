<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStartUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('start_ups', function (Blueprint $table) {
            //$business_idea, $product_service, $technology, $approach, $mentor, $incubator;
            $table->id();
            $table->integer('application_id');
            $table->longText('business_idea');
            $table->longText('product_service');
            $table->longText('technology');
            $table->longText('approach');
            $table->longText('mentor')->nullable();
            $table->longText('incubator')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('start_ups');
    }
}
