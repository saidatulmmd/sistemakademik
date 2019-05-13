<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodataSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_siswa', function (Blueprint $table) {
            $table->bigIncrements('biodata_id');
            $table->string('no_induk_siswa');
            $table->string('nama_siswa');
            $table->string('tempat_lahir_siswa');
            $table->string('tanggal_lahir_siswa');
            $table->string('jenis_kelamin_siswa');
            $table->string('agama_siswa');
            $table->string('hobi_siswa');
            $table->string('alamat_siswa');
            $table->string('no_telepon_siswa');
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
        Schema::dropIfExists('biodata_siswa');
    }
}
