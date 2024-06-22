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
        Schema::create('pengurus_kbks', function (Blueprint $table) {
            $table->id();
            $table->string('jabatan');
            $table->biginteger('kbk_id')->unsigned();
            $table->foreign('kbk_id')->references('id')->on('kbks');
            $table->string('periode');
            $table->string('status');
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
        Schema::dropIfExists('penguruskbks');
    }
};
