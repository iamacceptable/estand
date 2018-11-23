<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{	
		$data['active'] = 'homepage';
		$this->load->view('Admin/admin_homepage',$data);
	}
	
}
