<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	  $data = [
      'title' => 'selamat datang di BelajarYuk',
      'menu'  => 'dashboard'
	  ];
		return view('home/index', $data);
	}

	// ---------------------------------------------------------------------------
}