<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutwardRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outward_registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('inwid');
            $table->integer('uid');
            $table->integer('itemid');
            $table->integer('quantity');
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
        Schema::dropIfExists('outward_registers');
    }
}
