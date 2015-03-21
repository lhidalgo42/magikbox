<?php

class UsersController extends \BaseController {

	public function dashboard()
	{
		if (Auth::check())
            return View::make('pages.app.dashboard');
		return Redirect::to('login');
    }

    public function profile()
    {
        if (Auth::check())
            return View::make('pages.app.profile');
        return Redirect::to('login');
    }

}
