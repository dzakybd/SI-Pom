<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeteranganbbmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keteranganbbms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            //$table->int('iegernstansi')->unsigned()
            //      ->index();
            $table->string('ket',100);
            //$table->integer('trans')->unsigned()
            //      ->index();
        });
        Schema::table('keteranganbbms',function($table){
            $table->integer('instansi')->unsigned();
            $table->foreign('instansi')
                  ->references('id')
                  ->on('instansibbms')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
        Schema::table('keteranganbbms',function($table){
            $table->integer('trans')->unsigned();
            $table->foreign('trans')
                  ->references('id')
                  ->on('transaksibbms')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keteranganbbms');
    }
}
