<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBabies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('babies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('mother_id');

            $table->string('nome');
            $table->string('nascimento');
            $table->float('peso');
            $table->float('altura');
            $table->string('slug');

            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('mother_id')->references('id')->on('mothers');

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
        Schema::dropIfExists('babies');
    }
}
