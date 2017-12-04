<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->integer('id_akun')->unsigned();
            $table->integer('id_contact')->unsigned();
            $table->timestamps('tanggal');
            $table->integer('nilai')->unsigned();
            $table->string('referensi');
            $table->text('keterangan');

            $table->foreign('id_akun')->references('id_akun')->on('akuns')->onDelete('CASCADE');
            $table->foreign('id_contact')->references('id_contact')->on('contacts')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
