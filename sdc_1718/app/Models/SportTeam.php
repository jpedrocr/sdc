<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class SportTeam extends Model
{
    use CrudTrait;
	use Sluggable, SluggableScopeHelpers;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'sport_teams';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'image', 'url', 'slug', 'fpb_id', 'sport_organization_id', 'sport_modality_id', 'sport_season_id', 'age_gender_group_id', 'competition_level_id'];
    // protected $hidden = [];
    // protected $dates = [];
	protected $appends = ['name_and_season'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
	/**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug_or_name',
            ],
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function age_gender_group()
    {
        return $this->belongsTo('App\Models\AgeGenderGroup');
    }
	public function competition_level()
    {
        return $this->belongsTo('App\Models\CompetitionLevel');
    }
    public function sport_modality()
    {
        return $this->belongsTo('App\Models\SportModality');
    }
	public function sport_organization()
    {
        return $this->belongsTo('App\Models\SportOrganization');
    }
	public function sport_season()
    {
        return $this->belongsTo('App\Models\SportSeason');
    }
    public function athlete_registrations()
    {
        return $this->hasMany('App\Models\AthleteRegistration');
    }
	public function coach_registrations()
    {
        return $this->hasMany('App\Models\CoachRegistration');
    }
    public function games_home()
    {
        return $this->hasMany('App\Models\Game', 'sport_team_home_id');
    }
	public function games_out()
    {
        return $this->hasMany('App\Models\Game', 'sport_team_out_id');
    }
    public function ranks()
    {
        return $this->hasMany('App\Models\Rank');
    }
    public function sport_team_registrations()
    {
        return $this->hasMany('App\Models\SportTeamRegistration');
    }
	public function team_assistant_registrations()
    {
        return $this->hasMany('App\Models\TeamAssistantRegistration');
    }
	public function therapist_registrations()
    {
        return $this->hasMany('App\Models\TherapistRegistration');
    }
	public function sponsors()
    {
        return $this->belongsToMany('App\Models\Sponsor', 'sponsor_team', 'sport_team_id', 'sponsor_id');
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
	// The slug is created automatically from the "name" field if no slug exists.
    public function getSlugOrNameAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return $this->name;
    }
    public function getNameAndSeasonAttribute()
    {
        return $this->sport_season->name . ' - ' . $this->name . ' - ' . $this->age_gender_group->name_and_gender;
    }
	public function getFpbButton() {
		if (isset($this->fpb_id)) {
			return '<a href="http://www.fpb.pt/fpb2014/!site.go?s=1&show=equ&id=' . $this->fpb_id . '" target="_blank" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> FPB</a>';
		}
		return '';
	}

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
