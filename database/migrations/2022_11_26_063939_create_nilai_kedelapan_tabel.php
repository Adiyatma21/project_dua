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
        Schema::create('nilai_kedelapan_tabel', function (Blueprint $table) {
            $table->id();
            $table->string('jumlah_dilaksanakan');
            $table->string('jumlah_tdk');
            $table->string('jumlah_jaga');
            $table->string('nilai_kedelapan');
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
        Schema::dropIfExists('nilai_kedelapan_tabel');
    }
};
