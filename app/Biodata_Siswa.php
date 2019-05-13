<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata_Siswa extends Model
{
    protected $table = "biodata_siswa";

    protected $fillable = ['no_induk_siswa','nama_siswa','tempat_lahir_siswa','tanggal_lahir_siswa','jenis_kelamin_siswa','agama_siswa','hobi_siswa','alamat_siswa','no_telepon_siswa'];


}
