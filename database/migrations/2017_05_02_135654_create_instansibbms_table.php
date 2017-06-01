<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstansibbmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansibbms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('namaInstansi',100);
            // $table->foreign('bbm')
            //       ->references('id')
            //       ->on('bbms')
            //       ->onUpdate('cascade')
            //       ->onDelete('cascade');
            // $table->foreign('keterangan')
            //       ->references('id')
            //       ->on('keteranganbbms')
            //       ->onUpdate('cascade')
            //       ->onDelete('cascade');
            // $table->foreign('transaksi')
            //       ->references('id')
            //       ->on('transaksibbms')
            //       ->onUpdate('cascade')
            //       ->onDelete('cascade');

        });
        // Schema::table('instansibbms', function (Blueprint $table) {
        //     // $table->string('bbm')->unsigned();
            
        // });
        // Schema::table('instansibbms', function (Blueprint $table) {
        //     // $table->integer('keterangan')->unsigned();
            
        // });
        // Schema::table('instansibbms', function (Blueprint $table) {
        //     // $table->integer('transaksi')->unsigned();
            
        // });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instansibbms');
    }
}
