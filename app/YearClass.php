<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YearClass extends Model
{
    protected $guards = [];


    public function year_class(){
        return $this->belongsTo('App\SchoolYear');
    }

}
