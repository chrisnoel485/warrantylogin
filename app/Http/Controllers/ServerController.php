<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;

class ServerController extends Controller
{
    //
    public function index()
    {
    	// mengambil semua data pengguna
    	$server = Server::all();
    	// return data ke view
    	return view('server/warranty', ['server' => $server]);
    }
}