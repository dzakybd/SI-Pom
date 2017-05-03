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
            $table->string('tipe',10);
            $table->date('tanggal',100);
            $table->integer('jumlah',false,true);
            $table->integer('instansit',false,true)->unsigned();
            $table->integer('keterangant',false,true)->unsigned();
            $table->integer('bbmt',false,true)->unsigned();
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
