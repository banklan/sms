<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolHouse extends Model
{
    protected $guards = [];


    public function school(){
        return $this->belongsTo('App\School');
    }
}
