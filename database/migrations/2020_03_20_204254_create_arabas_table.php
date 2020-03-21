<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArabasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arabas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marka');
            $table->string('model');
            $table->integer('motor_hacmi');
            $table->string('koltuk_sayisi');
            $table->string('yakit_turu');
            $table->string('vites_turu');
//            $table->string('img');
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
        Schema::dropIfExists('arabas');
    }
}
