<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    
    public function addVoyage()
    {
        return $this->hasOne('App\Voyage');
    }
}
