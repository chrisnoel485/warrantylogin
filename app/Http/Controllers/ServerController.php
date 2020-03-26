<?php

namespace App\Http\Controllers;

use App\Server;
use Redirect;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $server = DB::table('servers')->get();
 
    	return view('server/index',['server' => $server]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('server/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //DB::table('servers')->insert([
        //    'hostname' => $request->nama,
        //    'pegawai_jabatan' => $request->jabatan,
        //    'pegawai_umur' => $request->umur,
        //    'pegawai_alamat' => $request->alamat
        //]);
        // alihkan halaman ke halaman pegawai
        //return redirect('/pegawai');
         //
         $rules =[
            'hostname'=>'required',
            'sn'=>'required',
            'tahun_pembelian'=>'required',
            'expired'=>'required'
        ];
 
        $validator = Validator::make($rules, [
            'hostname.required'=>'Nama Barang Tidak Boleh Kosong',
            'sn.required'=>'Harga Barang Tidak Boleh Kosong',
            'tahun_pembelian.required'=>'Deskripsi Tidak Boleh Kosong',
            'expired.required'=>'Expired Tidak Boleh Kosong'
        ]);
 
        //jika data ada yang kosong
        if ($validator->fails()) {
 
            //refresh halaman
            return Redirect::to('server/create')
            ->withErrors($validator);
 
        }else{

            DB::table('servers')->insert([
                'hostname' => $request->hostname,
                'sn' => $request->sn,
                'kp' => $request->kp,
                'merek' => $request->merek,
                'tahun' => $request->tahun_pembelian,
                'expired' => $request->expired
            ]);
            
 
            Session::flash('message','Succes Add Server');
 
            return redirect('/server');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function show(Server $server)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	    $server = DB::table('servers')->where('id',$id)->get();
	    return view('server/edit',['servers' => $server]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
            DB::table('servers')->where('id',$request->id)->update([
                'hostname' => $request->hostname,
                'sn' => $request->sn,
                'kp' => $request->kp,
                'merek' => $request->merek,
                'tahun' => $request->tahun_pembelian,
                'expired' => $request->expired
            ]);
            
            Session::flash('message','Succes Edit Server');
 
            return redirect('/server');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('servers')->where('id',$id)->delete();

		Session::flash('message','Succes Delete Server');
	    // alihkan halaman ke halaman pegawai
	    return redirect('/server');
    }
}
