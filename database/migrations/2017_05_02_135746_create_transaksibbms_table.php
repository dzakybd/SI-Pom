<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksibbmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksibbms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            //$table->integer('instansit')->unsigned()
            //      ->index();
            //$table->integer('keterangant')->unsigned()
            //      ->index();
            $table->string('tipe',10);
            $table->date('tanggal',100);
            $table->integer('jumlah',100);
            //$table->integer('bbmt')->unsigned()
            //      ->index();
            
        });
        Schema::table('transaksibbms',function($table){
            $table->integer('instansit')->unsigned();
            $table->foreign('instansit')
                  ->references('id')
                  ->on('intansibbms')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
        Schema::table('transaksibbms',function($table){
            $table->integer('keterangant')->unsigned();
            $table->foreign('keterangant')
                  ->references('id')
                  ->on('keteranganbbms')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
        Schema::table('transaksibbms',function($table){
            $table->integer('bbmt')->unsigned();
            $table->foreign('bbmt')
                  ->references('id')
                  ->on('bbms')
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
        Schema::dropIfExists('transaksibbms');
    }
}
