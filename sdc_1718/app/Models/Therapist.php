<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Therapist extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'therapists';
    protected $primaryKey = 'id';
	public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['person_id', 'license', 'fpb_id'];
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
	public function therapist_registrations()
    {
        return $this->hasMany('App\Models\TherapistRegistration');
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
	public function getFpbButton() {
		if (isset($this->fpb_id)) {
			return '<a href="http://www.fpb.pt/fpb2014/!site.go?s=1&show=ehu&id=' . $this->fpb_id . '" target="_blank" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> FPB</a>';
		}
		return '';
	}

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
