<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welkam');
	}

	public function sukses()
	{
		return view('sukses');
	}


	public function login()
	{
		return view('auth/login');
	}
	public function register()
	{
		return view('auth/register');
	}
}
