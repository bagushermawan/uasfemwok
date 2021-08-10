<?php

namespace App\Controllers;
use App\Models\OrderModel;
class Home extends BaseController
{
	public function index()
	{
		return view('welkam');
	}

	public function sukses()
	{
		$orders = new OrderModel();
        
		$data['orders'] = $orders->findAll();
		return view('sukses', $data);
	}

	public function bayar()
	{
		$orders = new OrderModel();
        
		$data['orders'] = $orders->findAll();
		return view('bayar', $data);
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
