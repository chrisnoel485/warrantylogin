<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    //
    protected $table = "warranties";
    protected $fillable = ['tahun_pembelian','expired_warranty'];
 
    public function server()
    {
    	return $this->belongsTo('App\Server');
    }
}
