<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function user(){
        return $this->hasMany('App\User', 'skill_id');
    }

    public function project(){
        return $this->hasMany('App\Project', 'skill_id');
    }
}
