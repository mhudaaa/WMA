<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stok;

class WMAController extends Controller{
 	
 	public function showData(){
 		$stok = Stok::all();
 		return view('data', compact('stok'));
 	}   

 	public function formAddData(){
 		return view('tambah-data');
 	}

 	public function setData(Request $request){
 		$stok = new Stok();

 		$dataStok = Stok::all();
 		$jmlDataStok = Stok::count();
 		$peramalan = 0;
 		$bulan = 0;

 		for ($i=0; $i < $jmlDataStok; $i++) { 
 			$peramalan = $peramalan + $dataStok[$i]['jumlah'] * $dataStok[$i]['bulan'];
	 		$bulan = $bulan + $dataStok[$i]['bulan'];
 		}

 		$peramalan = $peramalan / $bulan;

 		$data = [
 			'barang' => $request->barang,
 			'bulan' => $request->bulan,
 			'jumlah' => $request->jumlah,
 			'peramalan' => $peramalan
 		];

 		$stok->insert($data);
 		return redirect('/');
 	}
}
