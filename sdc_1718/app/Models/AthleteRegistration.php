<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class AthleteRegistration extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'athlete_registrations';
    protected $primaryKey = 'id';
	public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['athlete_id', 'sport_team_id', 'athlete_role_id'];
    // protected $hidden = [];
    // protected $dates = [];

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
	public function athlete()
	{
		return $this->belongsTo('App\Models\Athlete');
	}
    public function athlete_role()
	{
		return $this->belongsTo('App\Models\AthleteRole');
	}
	public function sport_team()
	{
		return $this->belongsTo('App\Models\SportTeam');
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

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
