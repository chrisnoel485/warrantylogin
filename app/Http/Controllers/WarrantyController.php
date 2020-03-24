<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warranty;

class WarrantyController extends Controller
{
    //
    public function index()
    {
    	// mengambil semua data pengguna
    	$warranty = Warranty::all();
    	// return data ke view
    	return view('warranty', ['warranty' => $warranty]);
    }
}
