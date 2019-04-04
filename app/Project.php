<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Table Name

    // Primary Key

    // Timestamp

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_name', 'project_fee', 'description', 'skill_id', 'employer_id', 'employee_id'
    ];

    public function user_employee(){
        return $this->belongsTo('App\User', 'employee_id');
    }

    public function user_employer(){
        return $this->belongsTo('App\User', 'employer_id');
    }

    public function skill(){
        return $this->belongsTo('App\Skill', 'skill_id');
    }
}