<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoPerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_perusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->string('efisiensi',500);
            $table->string('info',500);
            $table->string('berita',800);
            $table->binary('struktur_organisasi');
            $table->binary('foto_dewan_komisaris');
            $table->string('laporan_dewan_komisaris',500);
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
        Schema::dropIfExists('info_perusahaans');
    }
}
