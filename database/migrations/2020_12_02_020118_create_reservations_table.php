<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('Username');
            $table->string('Phone');
            $table->string('Email');
            $table->string('People');
            $table->string('Date');
            $table->string('Time');
            $table->text('MESSAGE');
            $table->string('Type');
            $table->string('tranction_id');
            $table->string('bkash_number');
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
        Schema::dropIfExists('reservations');
    }
}
