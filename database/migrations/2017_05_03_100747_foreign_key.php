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
        Schema::table('keteranganbbms', function (Blueprint $table) {
            $table->foreign('instansi')
                  ->references('idinstansi')
                  ->on('instansibbms')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
        Schema::table('transaksibbms', function (Blueprint $table) {
        $table->foreign('instansit')
                  ->references('idinstansi')
                  ->on('instansibbms')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('keterangant')
                  ->references('idketerangan')
                  ->on('keteranganbbms')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('bbmt')
                  ->references('idbbms')
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
