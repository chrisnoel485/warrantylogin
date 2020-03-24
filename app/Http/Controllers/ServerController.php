<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Server;

class ServerController extends Controller
{
    //
    public function index()
    {
    	$server = Server::all();
        return view('warranty', ['server' => $server]);
    }
}
