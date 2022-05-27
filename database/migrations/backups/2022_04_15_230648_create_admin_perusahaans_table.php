<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminPerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_perusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('id_produk');
            $table->string('nama_perusahaan',50);
            $table->string('email_perusahaan',50)->unique();
            $table->string('password',50);
            $table->binary('berkas');
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
        Schema::dropIfExists('admin_perusahaans');
    }
}
