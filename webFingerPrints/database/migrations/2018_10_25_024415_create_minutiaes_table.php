<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinutiaesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minutiaes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fingerprint_id')->unsigned();
            $table->foreign('fingerprint_id')->references('id')->on('fingerprints')->onDelete('cascade');
            $table->float('angle');
            $table->float('x');
            $table->float('y');
            $table->integer('mintype_id')->unsigned();
            $table->foreign('mintype_id')->references('id')->on('mintypes')->onDelete('cascade');
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
        Schema::dropIfExists('minutiaes');
    }
}
