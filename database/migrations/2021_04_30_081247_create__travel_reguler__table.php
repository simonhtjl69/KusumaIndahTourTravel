<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelRegulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_reguler', function (Blueprint $table) {
            $table->id();
            $table->string('nama_travel');
            $table->string('asal_berangkat');
            $table->string('tujuan');
            $table->date('tanggal');
            $table->time('jam');
            $table->double('harga');
            $table->integer('seat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travel_reguler');
    }
}
