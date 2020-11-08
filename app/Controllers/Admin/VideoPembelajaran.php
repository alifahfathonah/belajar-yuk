<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class VideoPembelajaran extends BaseController
{
  protected $menu = 'video pembelajaran';
  
	public function index()
	{
	  $data = [
      'title' => 'Video Pembelajaran - BelajarYuk',
      'menu'  => $this->menu
	  ];
	  
		return view('admin/video-pembelajaran/index', $data);
	}

	// ---------------------------------------------------------------------------
}