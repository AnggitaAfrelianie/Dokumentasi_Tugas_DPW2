<?php

namespace App\Http\Controllers;

use App\Http\Models\Barang;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * create a new controller instance.
	 * 
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('Auth');
	}

	/**
	 * show the application dashboard.
	 * 
	 * @return \illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		$barangs = Barang::paginate(20);
		return view('Home',compact('Barangs'));
	}
}