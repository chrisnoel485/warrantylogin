<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    //
    protected $table = 'servers';
    protected $fillable = ['sn', 'hostname', 'kp_id', 'merek_is'];

    public function kp()
    {
    	return $this->belongsTo(Kp::class);
    }

    public function merek()
    {
    	return $this->belongsTo(Merek::class);
    }
}
