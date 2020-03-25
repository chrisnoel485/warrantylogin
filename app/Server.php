<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    //
    protected $table = "warranties";
 
    public function warranty()
    {
    	return $this->hasOne('App\Server');
    }
}
