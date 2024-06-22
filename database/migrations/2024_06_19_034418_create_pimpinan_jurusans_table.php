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
        Schema::create('pimpinan_jurusans', function (Blueprint $table) {
            $table->id();
            $table->biginteger('dosen_id')->unsigned();
            $table->foreign('dosen_id')->references('id')->on('dosens');
            $table->string('jabatan');
            $table->string('periode');
            $table->string('status');
            $table->biginteger('jurusan_id')->unsigned();
            $table->foreign('jurusan_id')->references('id')->on('jurusans');
            $table->biginteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pimpinanJurusans');
    }
};
