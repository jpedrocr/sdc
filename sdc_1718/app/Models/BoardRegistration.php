<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class BoardRegistration extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'board_registrations';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['board_id', 'biennium_id', 'board_member_id', 'board_role_id'];
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
    public function biennium()
	{
		return $this->belongsTo('App\Models\Biennium');
	}
	public function board()
	{
		return $this->belongsTo('App\Models\Board');
	}
	public function board_member()
	{
		return $this->belongsTo('App\Models\BoardMember');
	}
	public function board_role()
	{
		return $this->belongsTo('App\Models\BoardRole');
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
		return $this->board->sport_organization->name;
	}

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
