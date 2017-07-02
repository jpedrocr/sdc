<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function () {
	// Backpack\MenuCRUD
    CRUD::resource('menu-item', 'MenuItemCrudController');

	$controller = config('backpack.articlemanager.admin-controller-class', 'ArticleCrudController');

	// Backpack\PageManager routes
    Route::get('article/create/{template}', $controller.'@create');
    Route::get('article/{id}/edit/{template}', $controller.'@edit');

    // Backpack\NewsCRUD
    CRUD::resource('article', 'ArticleCrudController');
    CRUD::resource('category', 'CategoryCrudController');
    CRUD::resource('tag', 'TagCrudController');

	// // Sports Content
	CRUD::resource('sport-organization-type', 'SportOrganizationTypeCrudController');
	CRUD::resource('sport-venue', 'SportVenueCrudController');
	CRUD::resource('sport-organization', 'SportOrganizationCrudController');
	CRUD::resource('relevant-event', 'RelevantEventCrudController');
	CRUD::resource('board', 'BoardCrudController');

	CRUD::resource('biennium', 'BienniumCrudController');

	CRUD::resource('person', 'PersonCrudController');

	CRUD::resource('board-member', 'BoardMemberCrudController');
	CRUD::resource('board-member-role', 'BoardRoleCrudController');
	CRUD::resource('board-member-registration', 'BoardRegistrationCrudController');

	CRUD::resource('sport-modality', 'SportModalityCrudController');
	CRUD::resource('sport-season', 'SportSeasonCrudController');
	CRUD::resource('age-gender-group', 'AgeGenderGroupCrudController');
	CRUD::resource('competition-level', 'CompetitionLevelCrudController');
	CRUD::resource('sponsor', 'SponsorCrudController');

	CRUD::resource('coach', 'CoachCrudController');
	CRUD::resource('coach-role', 'CoachRoleCrudController');
	CRUD::resource('coach-registration', 'CoachRegistrationCrudController');

	CRUD::resource('athlete', 'AthleteCrudController');
	CRUD::resource('athlete-role', 'AthleteRoleCrudController');
	CRUD::resource('athlete-registration', 'AthleteRegistrationCrudController');

	CRUD::resource('team-assistant', 'TeamAssistantCrudController');
	CRUD::resource('team-assistant-registration', 'TeamAssistantRegistrationCrudController');

	CRUD::resource('therapist', 'TherapistCrudController');
	CRUD::resource('therapist-registration', 'TherapistRegistrationCrudController');

	CRUD::resource('sport-team', 'SportTeamCrudController');
	CRUD::resource('sport-team-registration', 'SportTeamRegistrationCrudController');

	CRUD::resource('sport-competition', 'SportCompetitionCrudController');
	CRUD::resource('phase', 'PhaseCrudController');
	CRUD::resource('lap', 'LapCrudController');
	CRUD::resource('round', 'RoundCrudController');
	CRUD::resource('game', 'GameCrudController');
	CRUD::resource('rank', 'RankCrudController');
});

Route::resource('noticias', 'ArticleController', ['only' => [
    'index', 'show'
]]);

Route::get('historia', function () {
    return view('sdc-historia');
});
Route::get('orgaos', function () {
    return view('sdc-orgaos');
});
Route::get('datas', function () {
    return view('sdc-datas');
});
Route::get('estatutos', function () {
    return view('sdc-estatutos');
});
Route::get('ligacoes', function () {
    return view('sdc-ligacoes');
});
Route::get('socios', function () {
    return view('sdc-socios');
});
Route::get('equipas', function () {
    return view('welcome');
});
Route::get('parcerias', function () {
    return view('parcerias');
});
Route::get('produtos', function () {
    return view('produtos');
});
Route::get('galeria', function () {
    return view('welcome');
});
Route::get('contactos', function () {
    return view('contactos');
});
Route::get('/', function () {
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
