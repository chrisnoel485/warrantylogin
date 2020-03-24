<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    //
    protected $table = "server";
 
    public function warranty()
    {
        return $this->hasOne('App\Warranty');
    }
}