<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keteranganbbms extends Model
{
    protected $primaryKey = 'idketerangan';
    protected $fillable = ['ket','instansi'];
}
