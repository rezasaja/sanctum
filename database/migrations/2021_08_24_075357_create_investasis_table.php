<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investasis', function (Blueprint $table) {
            $table->id();
            $table->string('jenis')->default('individu');
            $table->string('nomor');
            $table->bigInteger('user_id');
            $table->string('nama_depan');
            $table->string('nama_belakang')->nullable();
            $table->string('nama_instansi')->nullable();
            // $table->string('jenis_kelamin',1)->default('L');
            $table->date('tanggal_pembukaan');
            $table->double('saldo');
            $table->tinyInteger('aktif');
            $table->string('user_created')->default(0);
            $table->string('user_updated')->nullable();
            $table->string('user_deleted')->nullable();
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
        Schema::dropIfExists('investasis');
    }
}
