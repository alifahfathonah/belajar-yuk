<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
	public function index()
	{
	  $data = [
      'title' => 'data siswa - BelajarYuk',
      'menu'  => 'data siswa'
	  ];
		return view('admin/siswa/index', $data);
	}

	// ---------------------------------------------------------------------------
}