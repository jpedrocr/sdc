<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class SportOrganization extends Model
{
    use CrudTrait;
	use Sluggable, SluggableScopeHelpers;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'sport_organizations';
    protected $primaryKey = 'id';
	public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['name', 'alternate_name', 'legal_name', 'founding_date', 'image', 'address', 'email', 'telephone', 'fax_number', 'url', 'slug', 'fpb_id', 'sport_venue_id', 'member_of'];
    // protected $hidden = [];
    // protected $dates = [];

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
	public function sport_venue()
    {
        return $this->belongsTo('App\Models\SportVenue');
    }
	public function member_of_sport_organization()
    {
        return $this->hasOne('App\Models\SportOrganization', 'member_of');
    }
	public function sport_teams()
    {
        return $this->hasMany('App\Models\SportTeam');
    }
	public function boards()
    {
        return $this->hasMany('App\Models\Board');
    }
	public function relevant_events()
    {
        return $this->hasMany('App\Models\RelevantEvent');
    }
	public function sport_organizations()
    {
        return $this->hasMany('App\Models\SportOrganization', 'member_of');
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

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
