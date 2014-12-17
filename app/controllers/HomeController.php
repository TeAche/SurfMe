<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function indexAction()
	{
		return View::make('home/index');
	}

    public function profileAction()
    {
        return View::make('home/profile');
    }

    public function manageAction()
    {
        return View::make('home/manage');
    }

    public function surfmeAction()
    {
        return View::make('home/surfme');
    }

    public function blogAction()
    {
        return View::make('home/blog');
    }

    public function registerAction()
    {
        return View::make('home/register');
    }

    public function uploadAction()
    {
        Image::upload(Input::file('image'), 'articles/', true);
        return View::make('home/index');
    }

    public function testAction()
    {
        return View::make('test');
    }
}
