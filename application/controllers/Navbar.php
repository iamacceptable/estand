<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Navbar extends CI_Controller {
	public function auth(){
		redirect('Authentication');
	}
	public function products(){
		redirect('Products');
	} 
	public function home(){
		redirect('Homepage');
	}
}
