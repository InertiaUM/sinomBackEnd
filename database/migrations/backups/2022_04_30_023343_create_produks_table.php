<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
        $table->id();
        $table->string('nama_produk',50);
        $table->integer('harga');
        $table->integer('penjualan');
        $table->string('komposisi',200);
        $table->integer('rentang_umur');
        $table->integer('rating');
        $table->integer('pemakaian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
