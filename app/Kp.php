<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kp extends Model
{
    //
    protected $table = 'kps';
    protected $fillable = ['kp'];

    /**
     * Method One To Many 
     */
    public function server()
    {
    	return $this->hasMany(Server::class);
    }
}
