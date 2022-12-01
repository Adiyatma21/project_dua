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
        Schema::create('nilai_ketuju_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_matkul_id');
            $table->integer('jumlah_mhs');
            $table->integer('jumlah_mhs_lulus');
            $table->string('total_presentase');
            $table->string('nilai_ketuju');
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
        Schema::dropIfExists('nilai_ketuju_tabel');
    }
};
