<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Server extends Model
{
    //
    public function index()
    {
    	// mengambil data dari table pegawai
    	$server = DB::table('servers')->get();
 
    	// mengirim data pegawai ke view index
    	return view('server/index',['server' => $server]);
 
    }
}
