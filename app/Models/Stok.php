<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model{
    protected 	$table = 'tb_stok';
    protected 	$primaryKey = 'id';
    public 		$timestamps = false;
    
    protected $fillable = [
		'barang', 'jumlah', 'bulan', 'peramalan'
	];
}
