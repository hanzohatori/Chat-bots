<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorksCategory extends Model
{
    public function works()
    {
        return $this->hasMany('App\Works');
    }
}
