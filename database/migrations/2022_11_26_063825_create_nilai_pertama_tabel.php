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
        Schema::create('nilai_pertama_tabel', function (Blueprint $table) {
            $table->id();
            $table->integer('total_satu');
            $table->integer('total_dua');
            $table->integer('total_hadir');
            $table->integer('nilai_pertama');
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
        Schema::dropIfExists('nilai_pertama_tabel');
    }
};
