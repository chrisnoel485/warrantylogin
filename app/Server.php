<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    //
    protected $table = "servers";
    protected $fillable = ['id','hostname'];
 
    public function warranty()
    {
    	return $this->hasOne('App\Warranty');
    }
}
