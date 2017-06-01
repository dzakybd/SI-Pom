<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksibbms extends Model
{
	protected $primaryKey = 'idtransaksi';
    protected $fillable = ['tipe','tanggal', 'jumlah', 'instansit', 'keterangant', 'bbmt'];
}
