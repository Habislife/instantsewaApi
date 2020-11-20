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
           $table->integer('quantity');
           $table->BigInteger('service_provider_id')->unsigned();
           $table->BigInteger('service_user_id')->unsigned();
           $table->string('address_address');
            $table->double('address_latitude', 15, 8);
            $table->double('address_longitude', 15, 8);
           $table->boolean('flag')->default(0);
           $table->BigInteger('rating_review_id')->unsigned()->nullable();
           $table->dateTime('start_time');
            $table->dateTime('end_time');
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
