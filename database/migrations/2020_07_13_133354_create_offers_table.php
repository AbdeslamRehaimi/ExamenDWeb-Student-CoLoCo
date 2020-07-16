<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->string('adress');
            $table->float('latitude');
            $table->float('longtude');
            $table->double('superficie');
            $table->double('prix');
            $table->integer('capacite');
            $table->string('description');
            $table->string('photo');
            $table->unsignedInteger('users_id');

            //$table->foreign('user')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('offers');
    }
}
