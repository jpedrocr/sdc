<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Coach extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'coaches';
    protected $primaryKey = 'id';
	public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['person_id', 'license', 'coach_grade', 'fpb_id'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $appends = ['name'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
	public function person()
    {
        return $this->belongsTo('App\Models\Person');
    }
	public function coach_registrations()
    {
        return $this->hasMany('App\Models\CoachRegistration');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */
	public function getNameAttribute()
    {
        return $this->person->name;
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
