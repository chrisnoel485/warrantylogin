<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    //
    protected $table =['warranties'];
 
    public function server()
    {
    	return $this->belongsTo('App\Server');
    }
}
