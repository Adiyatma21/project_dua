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
        Schema::create('nilai_kelima_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_matkul_id');
            $table->string('nama_kelompok_id');
            $table->string('total_kuis');
            $table->string('total_rata');
            $table->string('nilai_kelima');
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
        Schema::dropIfExists('nilai_kelima_tabel');
    }
};
