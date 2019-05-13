<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';

    protected $fillable = ['name','alamat_guru','telepon_guru','jenis_kelamin_guru'];
}
