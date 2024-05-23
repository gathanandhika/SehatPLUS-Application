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
        Schema::create('rekammedis', function (Blueprint $table) {
            $table->id('id_rm');
            $table->string('poly');
            $table->date('tgl_periksa');
            $table->integer('bb');
            $table->integer('tb');
            $table->integer('suhu');
            $table->integer('tekanan_darah');
            $table->string('detak_jantung');
            $table->string('diagnossa');
            $table->string('obat');
            $table->string('dosis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekammedis');
    }
};
