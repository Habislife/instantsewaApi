<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\softDeletes;
use Illuminate\Support\Facades\Schema;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
           $table->id();
            $table->BigInteger('service_id')->unsigned();
            $table->BigInteger('service_provider_id')->unsigned();
            $table->BigInteger('service_user_id')->unsigned();
            $table->string('address');
            $table->boolean('flag');
            $table->string('description');
            $table->BigInteger('rating_review_id')->unsigned();
            $table->timestamp('completed_time')->nullable();
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
        Schema::dropIfExists('operations');
    }
}
