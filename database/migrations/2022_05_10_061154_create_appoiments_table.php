<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoiments', function (Blueprint $table) {
            $table->id();
            $table->string('title_appoiment');
            $table->unsignedBigInteger('user_id_solicitante');
            $table->unsignedBigInteger('user_id_solicitado');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('checkbox_time')->nullable()->default(false);
            $table->text('description');



            $table->foreign('user_id_solicitante')->references('id')->on('users'); // cliente
            $table->foreign('user_id_solicitado')->references('id')->on('users');

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
        Schema::dropIfExists('appoiments');
    }
};
