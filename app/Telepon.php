<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    //
    protected $table = "telepon";
    protected $fillable = ['id', 'nomor_telepon','pengguna_id']; 
    public function pengguna()
    {
    	return $this->belongsTo('App\Pengguna','pengguna_id');
    }
}
