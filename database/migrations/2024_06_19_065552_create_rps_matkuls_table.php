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
        Schema::create('rps_matkuls', function (Blueprint $table) {
            $table->id();
            $table->string('kode_rps')->unique();
            $table->biginteger('matkul_id')->unsigned();
            $table->foreign('matkul_id')->references('id')->on('matakuliahs');
            $table->string('versi');
            $table->string('dokumen_rps');
            $table->biginteger('dosen_id')->unsigned();
            $table->foreign('dosen_id')->references('id')->on('dosens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rps_matkuls');
    }
};