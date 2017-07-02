<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Person extends Model
{
    use CrudTrait;
	use Sluggable, SluggableScopeHelpers;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'people';
    protected $primaryKey = 'id';
	public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['given_name', 'additional_name', 'family_name', 'honorific_prefix', 'birth_date', 'nationality', 'gender', 'image', 'email', 'telephone', 'slug'];
    // protected $hidden = [];
    protected $dates = ['birth_date'];
	protected $appends = ['name'];

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
    public function athlete()
    {
        return $this->hasOne('App\Models\Athlete');
    }
    public function board_member()
    {
        return $this->hasOne('App\Models\BoardMember');
    }
	public function coach()
    {
        return $this->hasOne('App\Models\Coach');
    }
	public function team_assistant()
    {
        return $this->hasOne('App\Models\TeamAssistant');
    }
	public function therapist()
    {
        return $this->hasOne('App\Models\Therapist');
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
	public function getNameAttribute()
    {
        return $this->given_name . ' ' . $this->family_name;
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
