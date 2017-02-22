<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('env-test', function()
{
    return [
        'App::environment()'  => App::environment(),
        'getenv(\'APP_ENV\')' => getenv('APP_ENV'),
        '$_ENV[\'APP_ENV\']'  => @$_ENV['APP_ENV'],
        'Database configs'    => [
            'DB_CONNECTION' => Config::get('database.default'),
            'DB_HOST' => Config::get('database.connections.mysql.host'),
            'DB_DATABASE' => Config::get('database.connections.mysql.database'),
            'DB_USERNAME' => Config::get('database.connections.mysql.username'),
            'DB_PASSWORD' => Config::get('database.connections.mysql.password'),
        ],
    ];
});

Route::get('/', function()
{
	return View::make('hello');
});
