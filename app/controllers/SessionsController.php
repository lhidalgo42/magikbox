<?php

use Acme\forms\LoginForm;
use Laracasts\Validation\FormValidationException;

class SessionsController extends \BaseController {


	protected $loginForm;

	public function __construct(LoginForm $loginForm)
	{
		$this->loginForm = $loginForm;
	}
	public function create()
	{
		// Verificamos que el usuario no esté autenticado
		if (Auth::check())
			return Redirect::to('/index');
		return View::make('sessions.create');
	}
	public function store()
	{
		$remember = (Input::has('remember')) ? true : false;
		$formData = Input::only('email', 'password');
		$this->loginForm->validate($formData);
		if ( ! Auth::attempt($formData, $remember))
			return Redirect::back()->withInput();
        return Redirect::route('home');
	}
	public function destroy()
	{
		Auth::logout();
		return Redirect::to('/login')->with('error', 'Gracias por su Visita.');
	}

}