<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;

class WarrantyController extends Controller
{
    //
    public function index()
    {
    	$server = Server::all();
        return view('warranty/home', ['server' => $server]);
    }
}
