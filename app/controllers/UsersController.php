<?php

class UsersController extends \BaseController {

	public function dashboard()
	{
		if (Auth::check()) {

            $sensors = null;
            $control = Control::where('users_id', Auth::user()->id)->get()->first();
            if($control) {
                $products = Product::where('controls_id', $control->id)->get();
                foreach ($products as $product) {
                    $sensors[] = Sensor::where('products_id', $product->id)->where('highlight', 1)->get()->first();
                }
            }

            return View::make('pages.app.dashboard', compact('sensors'));
        }
		return Redirect::to('login');
    }

    public function profile()
    {
        if (Auth::check())
            return View::make('pages.app.profile');
        return Redirect::to('login');
    }

}
