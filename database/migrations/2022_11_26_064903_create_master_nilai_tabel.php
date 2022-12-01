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
        Schema::create('master_nilai_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen_id');
            $table->string('nama_matkul_id');
            $table->string('nama_kelompok_id');
            $table->string('kinerja_pertama_nilai');
            $table->string('kinerja_kedua_nilai');
            $table->string('kinerja_ketiga_nilai');
            $table->string('kinerja_keempat_nilai');
            $table->string('kinerja_kelima_nilai');
            $table->string('kinerja_keenam_nilai');
            $table->string('kinerja_ketuju_nilai');
            $table->string('kinerja_kedelapan_nilai');
            $table->string('kinerja_kesembilan_nilai');
            $table->string('kinerja_kesepuluh_nilai');
            $table->string('kinerja_kesebelas_nilai');
            $table->string('kinerja_keduabelas_nilai');
            $table->string('kinerja_ketigabelas_nilai');
            $table->string('kinerja_keempatbelas_nilai');
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
        Schema::dropIfExists('master_nilai_tabel');
    }
};
