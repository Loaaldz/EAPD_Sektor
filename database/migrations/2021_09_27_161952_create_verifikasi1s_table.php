<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifikasi1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifikasi1', function (Blueprint $table) {
            $table->id();
            $table->string('nrk',50);
            $table->string('nip',50);
            $table->string('nama_anggota',255);
            $table->string('nama_pos',50);
            $table->string('Jabatan',50);
            $table->string('Jenis_APD',50);
            $table->string('Merk',50);
            $table->string('Kondisi',50);
            $table->string('Photo',255);
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
        Schema::dropIfExists('verifikasi1');
    }
}
