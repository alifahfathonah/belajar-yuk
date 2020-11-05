<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	  $data = [
      'title' => 'selamat datang di BelajarYuk',
      'menu'  => 'Dashboard'
	  ];
		return view('home/index', $data);
	}

	// ---------------------------------------------------------------------------
}