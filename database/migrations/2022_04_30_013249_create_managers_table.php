<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan');
            $table->string('nama_lengkap',50);
            $table->string('email',50);
            $table->string('password',50);
            $table->string('nomor_telepon',30);
            $table->enum('jenis_kelamin', ['laki-laki','perempuan']);;
            $table->date('tanggal_lahir');

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
        Schema::dropIfExists('managers');
    }
}
