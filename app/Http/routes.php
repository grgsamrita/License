<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
Route::get('/', function()//user makes the get request
{
	return View::make('pages.home'); // laravel 5 return View('pages.home');
	//return "hello world";
});
Route::get('about', function()
{
	return View::make('pages.about'); // laravel 5 return View('pages.contacts');
});
Route::get('contacts', function()
{
	return View::make('pages.contacts'); // laravel 5 return View('pages.contacts');
});
Route::get('traffic_rules', function()
{
	return View::make('pages.traffic_rules'); // laravel 5 return View('pages.traffic_rules');
});

Route::get('fill-form', function()
{
	return View::make('pages.fill-form');
});

Route::get('renew-form', function()
{
	return View::make('pages.renew-form'); // laravel 5 return View('pages.traffic_rules');
});
Route::get('view-results', function()
{
	return View::make('pages.view-results'); // laravel 5 return View('pages.traffic_rules');
});