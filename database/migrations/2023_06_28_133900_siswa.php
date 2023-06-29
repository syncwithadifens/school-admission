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
        Schema::create('tb_pendaftaran', function (Blueprint $table) {
            $table->string('id_pendaftaran')->unique();
            $table->string('tgl_daftar');
            $table->string('th_ajaran');
            $table->string('jurusan');
            $table->string('nm_peserta');
            $table->string('tmp_lahir');
            $table->string('tgl_lahir');
            $table->string('jk');
            $table->string('agama');
            $table->string('almt_peserta');
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
        Schema::dropIfExists('tb_pendaftaran');
    }
};
