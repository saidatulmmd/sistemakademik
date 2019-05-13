<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = "nilai";

    protected $fillable = ['no_induk_siswa','nama_pelajaran','nilai_uh','nilai_uts','nilai_uas','slug'];

}
