<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instansibbms extends Model
{
    protected $primaryKey = 'idinstansi';
    protected $fillable = ['namaInstansi','bbm','keterangan','transaksi'];
}
