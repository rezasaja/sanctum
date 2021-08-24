<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kredit_item_id');
            $table->integer('pembayaran');
            $table->string('pembayaran_metode');
            $table->date('pembayaran_tanggal');
            $table->double('pembayaran_nominal');
            $table->double('pembayaran_sisa');
            $table->text('deskripsi')->nullable();
            $table->text('catatan')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('transaksi');
    }
}
