<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class School extends Model
{
    protected $guards = [];

    protected static function boot(){
        parent::boot();
        static::addGlobalScope('order', function(Builder $builder){
            $builder->orderBy('created_at', 'desc');
        });
    }

    public function school_admin(){
        return $this->hasOne('App\SchoolAdmin');
    }

    public function teachers(){
        return $this->hasMany('App\Teacher');
    }

    public function accountants(){
        return $this->hasMany('App\Accountant');
    }

    public function students(){
        return $this->hasMany('App\Student');
    }

    public function school_groups(){
        return $this->hasMany('App\SchoolGroup');
    }

    public function school_house(){
        return $this->hasMany('App\SchoolHouse');
    }

    public function school_year(){
        return $this->hasMany('App\SchoolYear');
    }
}
