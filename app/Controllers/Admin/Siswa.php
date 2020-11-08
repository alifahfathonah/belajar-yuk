<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
  protected $menu = 'data siswa';
  
	public function index()
	{
	  $data = [
      'title' => 'Data Siswa - BelajarYuk',
      'menu'  => $this->menu
	  ];
		return view('admin/siswa/index', $data);
	}

	// ---------------------------------------------------------------------------
}