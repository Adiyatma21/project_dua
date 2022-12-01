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
        Schema::create('nilai_kedua_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_matkul_id');
            $table->string('nama_kelompok_id');
            $table->dateTimeTz('penyerahan');
            $table->string('terlambat');
            $table->string('total_serah');
            $table->string('nilai_kedua');
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
        Schema::dropIfExists('nilai_kedua_tabel');
    }
};
