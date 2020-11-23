<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    public function category()
    {
        return $this->belongsTo('App\WorksCategory');
    }
}
