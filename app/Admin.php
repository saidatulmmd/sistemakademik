<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admin";

    protected $fillable = ['name','alamat_admin','telepon_admin','jenis_kelamin_admin'];
}
