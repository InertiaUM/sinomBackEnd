<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('gender')->default(1)->comment('1: Laki-laki, 2: Perempuan');
            $table->date('birth_date')->nullable();
            $table->foreignId('company_id')->nullable()->constrained()->nullOnDelete();
            $table->tinyInteger('role')->default(2)->comment('1: superadmin, 2: admin company, 3: manager');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
