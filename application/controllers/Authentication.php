<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if(isset($_SESSION['loginned'])){
        	redirect('Homepage');
        }
    }
	public function index()
	{	
		$data['active'] = 'Login';
		$this->load->view('Authentication/authentication',$data);
	}
	public function register(){
		redirect('Registration');
	}
	public function authenticate(){
		$this->form_validation->set_rules('loginemail','Email','required|valid_email');
		$this->form_validation->set_rules('loginpassword','Password','required|min_length[8]|max_length[16]');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			$data = array(
				'u_email' => $this->input->post('loginemail'),
				'u_password' => md5($this->input->post('loginpassword'))
			);
			$this->load->model('Signin');
			$result = $this->Signin->login($data);
			if($result != FALSE){
				$user = array(
					'id' => $result['u_id'],
					'name' => $result['u_name'],
					'email' => $result['u_email'],
					'loginned' => 'login'
				);
				$this->session->set_userdata($user);
				redirect('Homepage');
			}
			else{
				$data['error'] = 'Please provide valid Email and Password';
				$data['active'] = 'Login';
				$this->load->view('Authentication/authentication',$data);
			}
		}
	}
}
