<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function index()
	{
        $data['active'] = 'products'; 
		$this->load->view('Products/products');
	}
	
}
