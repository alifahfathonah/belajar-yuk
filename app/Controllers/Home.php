<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
	  $data = [
	    'title' => 'welcome to belajar yuk'
	  ];
		return view('home/index', $data);
	}

	// ---------------------------------------------------------------------------
}