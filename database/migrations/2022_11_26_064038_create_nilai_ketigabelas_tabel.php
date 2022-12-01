<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_ketigabelas_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen_id');
            $table->string('staff_id');
            $table->string('kode_id');
            $table->date('tgl_masuk');
            $table->time('waktu_masuk');
            $table->time('waktu_keluar');
            $table->time('waktu_masuk_bulat');
            $table->time('waktu_keluar_bulat');
            $table->time('waktu_total');
            $table->string('jenis');
            $table->string('total_tm');
            $table->string('nilai_ketigabelas');
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
        Schema::dropIfExists('nilai_ketigabelas_tabel');
    }
};
