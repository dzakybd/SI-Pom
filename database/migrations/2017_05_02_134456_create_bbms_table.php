<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('namaBBM',100);
            $table->integer('harga', false, true)->length(100);
            $table->string('kode',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bbms');
    }
}
