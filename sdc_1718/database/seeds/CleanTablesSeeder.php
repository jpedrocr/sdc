<?php

use Illuminate\Database\Seeder;

class CleanTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// DB::table('sponsor_team')->truncate();
	    // DB::table('sport_team_registrations')->truncate();
	    // DB::table('ranks')->truncate();
	    // DB::table('games')->truncate();
	    // DB::table('rounds')->truncate();
	    // DB::table('laps')->truncate();
	    // DB::table('phases')->truncate();
	    // DB::table('sport_competitions')->truncate();
	    // DB::table('therapist_registrations')->truncate();
	    DB::table('therapists')->truncate();
	    // DB::table('team_assistant_registrations')->truncate();
	    // DB::table('team_assistants')->truncate();
	    // DB::table('athlete_registrations')->truncate();
	    // DB::table('athletes')->truncate();
	    // DB::table('athlete_roles')->truncate();
	    // DB::table('coach_registrations')->truncate();
	    // DB::table('sport_teams')->truncate();
	    // DB::table('sport_seasons')->truncate();
	    // DB::table('sport_modalities')->truncate();
	    // DB::table('competition_levels')->truncate();
	    // DB::table('age_gender_groups')->truncate();
	    // DB::table('coaches')->truncate();
	    // DB::table('coach_roles')->truncate();
	    // DB::table('board_registrations')->truncate();
	    // DB::table('board_members')->truncate();
	    // DB::table('board_roles')->truncate();
	    // DB::table('people')->truncate();
	    // DB::table('boards')->truncate();
	    // DB::table('sponsors')->truncate();
	    // DB::table('biennia')->truncate();
	    // DB::table('relevant_events')->truncate();
	    // DB::table('sport_organizations')->truncate();
	    // DB::table('sport_venues')->truncate();
	    // DB::table('sport_organization_types')->truncate();
    }
}
