<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';

    public function incomings () {
    	return $this->hasMany ('App\Receive');
    }
}
