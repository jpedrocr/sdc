<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SportOrganizationTypesTableSeeder::class);
        $this->call(SportVenuesTableSeeder::class);
        $this->call(SportOrganizationsTableSeeder::class);
        $this->call(RelevantEventsTableSeeder::class);
        $this->call(BienniaTableSeeder::class);
        $this->call(SponsorsTableSeeder::class);
        $this->call(BoardsTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(BoardRolesTableSeeder::class);
        $this->call(BoardMembersTableSeeder::class);
        $this->call(BoardRegistrationsTableSeeder::class);
        $this->call(CoachRolesTableSeeder::class);
        $this->call(CoachesTableSeeder::class);
        $this->call(AgeGenderGroupsTableSeeder::class);
        $this->call(CompetitionLevelsTableSeeder::class);
        $this->call(SportModalitiesTableSeeder::class);
        $this->call(SportSeasonsTableSeeder::class);
        $this->call(SportTeamsTableSeeder::class);
		$this->call(SponsorTeamPivotTableSeeder::class);
        $this->call(CoachRegistrationsTableSeeder::class);
		$this->call(TherapistsTableSeeder::class);
        $this->call(TherapistRegistrationsTableSeeder::class);
        $this->call(TeamAssistantsTableSeeder::class);
        $this->call(TeamAssistantRegistrationsTableSeeder::class);
        // $this->call(SportCompetitionsTableSeeder::class);
        // $this->call(PhasesTableSeeder::class);
        // $this->call(LapsTableSeeder::class);
        // $this->call(RoundsTableSeeder::class);
        // $this->call(GamesTableSeeder::class);
        // $this->call(RanksTableSeeder::class);
        // $this->call(SportTeamRegistrationsTableSeeder::class);
		// $this->call(AthleteRolesTableSeeder::class);
		// $this->call(AthletesTableSeeder::class);
		// $this->call(AthleteRegistrationsTableSeeder::class);
    }
}
