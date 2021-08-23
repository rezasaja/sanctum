<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKreditPermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('nomor_handphone');
            $table->string('nama_pemohon');
            $table->string('item');
            $table->double('nilai_harga_item');
            $table->double('nilai_uang_muka');
            $table->double('nilai_keuntungan');
            $table->double('nilai_kredit');
            $table->integer('masa');
            $table->double('nilai_cicilan');
            $table->tinyInteger('status')->default(0);
            $table->text('catatan')->nullable();
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
        Schema::dropIfExists('permohonan');
    }
}
