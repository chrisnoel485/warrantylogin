<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warranty;

class WarrantyController extends Controller
{
    //
    public function index()
    {
    	$warranty = Warranty::all();
        return view('warranty', ['warranty' => $warranty]);
    }
}
