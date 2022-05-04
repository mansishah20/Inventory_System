<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInwardRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inward_registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('itemid');
            $table->integer('pid');
            $table->integer('uid');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('expiredate');
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
        Schema::dropIfExists('inward_registers');
    }
}
