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
        Schema::create('verifikasi_Soals', function (Blueprint $table) {
            $table->id();
            $table->biginteger('rps_id')->unsigned();
            $table->foreign('rps_id')->references('id')->on('rps_matkuls');
            $table->string('status');
            $table->string('komentar');
            $table->biginteger('pimprod_id')->unsigned();
            $table->foreign('pimprod_id')->references('id')->on('pimpinan_prodis');
            $table->biginteger('pengkbk_id')->unsigned();
            $table->foreign('pengkbk_id')->references('id')->on('pengurus_kbks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verifikasi_Soals');
    }
};
