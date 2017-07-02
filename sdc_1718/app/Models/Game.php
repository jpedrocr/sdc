<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Game extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'games';
    protected $primaryKey = 'id';
	public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['fpb_id', 'schedule', 'result_home', 'result_out', 'round_id', 'sport_team_home_id', 'sport_team_out_id', 'sport_venue_id'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
	public function round()
    {
        return $this->belongsTo('App\Models\Round');
    }
	public function sport_team_home()
    {
        return $this->belongsTo('App\Models\SportTeam', 'sport_team_home_id');
    }
    	public function sport_team_out()
    {
        return $this->belongsTo('App\Models\SportTeam', 'sport_team_out_id');
    }
	public function sport_venue()
    {
        return $this->belongsTo('App\Models\SportVenue');
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

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
