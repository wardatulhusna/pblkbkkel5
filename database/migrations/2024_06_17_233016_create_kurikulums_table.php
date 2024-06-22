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
        Schema::create('kurikulums', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kurikulum');
            $table->string('nama_kurikulum');
            $table->string('versi');
            $table->string('tahun');
            $table->biginteger('prodi_id')->unsigned();
            $table->foreign('prodi_id')->references('id')->on('prodis');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kurikulums');
    }
};
