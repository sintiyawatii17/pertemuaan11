<?php 

namespace App\Http\Controllers;
use App\Models\Produk;

class ClientController extends Controller {

	function index(){
		$data['list_produk'] = Produk::Paginate(5);
		return view ('home', $data);
	}
	
}