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
        Schema::create('nilai_ketiga_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_matkul_id');
            $table->string('nama_kelompok_id');
            $table->date('tanggal_pertama');
            $table->date('tanggal_kedua');
            $table->time('waktu_upload');
            $table->string('total_ketepatan');
            $table->string('nilai_ketiga');
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
        Schema::dropIfExists('nilai_ketiga_tabel');
    }
};
