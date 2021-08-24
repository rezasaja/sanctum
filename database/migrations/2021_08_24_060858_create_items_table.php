<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kredit_nasabah_id');
            $table->string('item');
            $table->date('tanggal');
            $table->tinyInteger('tanggal_bayar');
            $table->double('nilai_harga_barang');
            $table->double('nilai_uang_muka');
            $table->double('nilai_keuntungan');
            $table->double('nilai_kredit_item');
            $table->string('pilihan')->default('masa');
            $table->string('masa');
            $table->double('nilai_cicilan');
            $table->date('tanggal_jatuh_tempo');
            $table->double('outstanding_kredit');
            $table->integer('outstanding_masa');
            $table->tinyinteger('status')->default('0');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('agen_id')->nullable();
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
        Schema::dropIfExists('item');
    }
}
