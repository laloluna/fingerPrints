<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoincidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coincidences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('current_fingerprint_id')->unsigned();
            $table->foreign('current_fingerprint_id')->references('id')->on('fingerprints')->onDelete('cascade');
            $table->integer('system_fingerprint_id')->unsigned();
            $table->foreign('system_fingerprint_id')->references('id')->on('fingerprints')->onDelete('cascade');
            $table->float('matching');
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
        Schema::dropIfExists('coincidences');
    }
}
