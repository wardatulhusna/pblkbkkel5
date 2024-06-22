<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_matkul')->unique();
            $table->string('nama_matkul');
            $table->biginteger('prodi_id')->unsigned();
            $table->foreign('prodi_id')->references('id')->on('kbks');
            $table->biginteger('kurikulum_id')->unsigned();
            $table->foreign('kurikulum_id')->references('id')->on('kurikulums');
            $table->biginteger('tahunaka_id')->unsigned();
            $table->foreign('tahunaka_id')->references('id')->on('smsTahunAkademiks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matakuliahs');
    }
};
