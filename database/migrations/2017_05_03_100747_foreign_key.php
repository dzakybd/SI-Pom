<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instansibbms', function (Blueprint $table) {
            $table->foreign('bbm')
                  ->references('id')
                  ->on('bbms')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('keterangan')
                  ->references('id')
                  ->on('keteranganbbms')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('transaksi')
                  ->references('id')
                  ->on('transaksibbms')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
        Schema::table('keteranganbbms', function (Blueprint $table) {
            $table->foreign('instansi')
                  ->references('id')
                  ->on('instansibbms')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('trans')
                  ->references('id')
                  ->on('transaksibbms')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
        Schema::table('transaksibbms', function (Blueprint $table) {
        $table->foreign('instansit')
                  ->references('id')
                  ->on('instansibbms')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('keterangant')
                  ->references('id')
                  ->on('keteranganbbms')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
        //
    }
}