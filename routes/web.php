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

/* Route for the intro page */

Route::get('/', function () {
    return view('home');
});

/* Routes for the login and logout process */
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

/* Routes for the profile page 
Route::get('/profile', 'ProfileController@show')->name('profile');
*/

/* Route for the dashboard main page  */

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

/* Routes for the projects CRUD */

Route::get('/projects', 'ProjectsController@index')->name('projects.index');
Route::post('/projects', 'ProjectsController@store')->name('projects.store');
Route::get('/projects/create', 'ProjectsController@create')->name('projects.create');
Route::get('/projects/{project}', 'ProjectsController@show')->name('projects.show');
Route::put('/projects/{project}', 'ProjectsController@update')->name('projects.update');
Route::delete('/projects/{project}', 'ProjectsController@destroy')->name('projects.destroy');
Route::get('/projects/{project}/edit', 'ProjectsController@edit')->name('projects.edit');


/* Routes for the issues CRUD */

Route::get('/issues', 'IssuesController@index')->name('issues.index');
Route::post('/issues', 'IssuesController@store')->name('issues.store');
Route::get('/issues/create', 'IssuesController@create')->name('issues.create');
Route::get('/issues/{issue}', 'IssuesController@show')->name('issues.show');
Route::put('/issues/{issue}', 'IssuesController@update')->name('issues.update');
Route::get('/issues/{issue}/edit', 'IssuesController@edit')->name('issues.edit');
Route::delete('/issues/{issue}', 'IssuesController@destroy')->name('issues.destroy');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
