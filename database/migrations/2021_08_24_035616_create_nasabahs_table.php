<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNasabahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('jenis')->default('Individu');
            $table->string('nomor');
            $table->string('identitas_jenis');
            $table->string('identitas_nomor');
            $table->string('nama_depan');
            $table->string('nama_belakang')->nullable();
            $table->string('nama_instansi')->nullable();
            $table->string('jenis_kelamin',1)->default('L');
            $table->string('lahir_tempat');
            $table->date('lahir_tanggal');
            $table->string('nama_ibu')->nullable();
            $table->text('alamat_identitas');
            $table->text('alamat_domisili');
            $table->string('nomor_kontak')->nullable();
            $table->tinyInteger('aktif')->default(1);
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
        Schema::dropIfExists('nasabah');
    }
}
