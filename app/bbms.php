<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bbms extends Model
{
    protected $primaryKey = 'idbbms';
    protected $fillable = ['namaBBM','harga','kode'];
}
