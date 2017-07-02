<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class TherapistRegistration extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'therapist_registrations';
	protected $primaryKey = 'id';
	public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['therapist_id', 'sport_team_id'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $appends = ['sport_organization_name'];

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
	public function therapist()
	{
		return $this->belongsTo('App\Models\Therapist');
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
	public function getSportOrganizationNameAttribute()
	{
		return $this->sport_team->sport_organization->name;
	}

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
