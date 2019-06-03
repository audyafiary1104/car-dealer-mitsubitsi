<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'master_karyawan';
    protected $fillable = ['nama','nik','alamat','nama_atasan','cabang','departement','jabatan'];
    public $timestamps = false;

}
