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
        Schema::create('nilai_kesembilan_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('jumlah_penugasan');
            $table->string('jumlah_realisasi');
            $table->string('total_presen');
            $table->string('nilai_kesembilan');
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
        Schema::dropIfExists('nilai_kesembilan_tabel');
    }
};
