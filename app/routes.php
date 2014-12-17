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

Route::get('/', array(
    'as'    => 'index',
    'uses'  => 'HomeController@indexAction'
));

Route::get('/profile', array(
    'as'    => 'profile',
    'uses'  => 'HomeController@profileAction',
));

Route::get('/manage', array(
    'as'    => 'manage',
    'uses'  => 'HomeController@manageAction',
));

Route::get('/surfme', array(
    'as'    => 'surfme',
    'uses'  => 'HomeController@surfmeAction',
));

Route::get('/blog', array(
    'as'    => 'blog',
    'uses'  => 'HomeController@blogAction',
));

Route::get('/register', array(
    'as'    => 'register',
    'uses'  => 'HomeController@registerAction',
));

Route::post('/upload', array(
    'as'    => 'upload',
    'uses'  => 'HomeController@uploadAction'
));

Route::get('/test', array(
    'as'    => 'test',
    'uses'  => 'HomeController@testAction'
));