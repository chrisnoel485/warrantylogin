<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    //
    protected $table = 'mereks';
    protected $fillable = ['merek'];

    /**
     * Method One To Many 
     */
    public function server()
    {
    	return $this->hasMany(Server::class);
    }
}
