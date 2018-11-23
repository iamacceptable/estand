<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if(isset($_SESSION['loginned'])){
        	redirect('Homepage');
        }
    }
	public function index()
	{	
		$data['active'] = 'Register';
		$this->load->view('Authentication/registration',$data);
	}
	public function signin(){
		redirect('Authentication');
	}
	public function register(){
		$this->form_validation->set_rules('regname', 'Name', 'required');
		$this->form_validation->set_rules('regemail', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('regphone', 'Mobile', 'required|min_length[10]|max_length[10]|numeric');
		$this->form_validation->set_rules('regpassword', 'Password', 'required|min_length[8]|max_length[16]');
		$this->form_validation->set_rules('regdob', 'DOB', 'required');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			$data = array(
				'u_name' => $this->input->post('regname'),
				'u_email' => $this->input->post('regemail'),
				'u_phone' => $this->input->post('regphone'),
				'u_password' => md5($this->input->post('regpassword')),
				'u_dob' => $this->input->post('regdob')
			);
			$this->load->model('Signin');
			$result = $this->Signin->register($data);
			if($result != FALSE){
				$this->load->model('Signin');
				$res = $this->Signin->fetchuser($result);
				$dt = array('u_email' => $res['u_email'], 'u_password' => $res['u_password']);
				$r = $this->Signin->login($dt);
				if($r != FALSE){
					$user = array(
					'id' => $r['u_id'],
					'name' => $r['u_name'],
					'email' => $r['u_email'],
					'loginned' => 'login'
					);
					$this->session->set_userdata($user);
					redirect('Homepage');
				}
				else{
					$data['error'] = 'User Not Loggined but Successfully Registered';
					$data['active'] = 'Register';
					$this->load->view('Authentication/registration',$data);
				}
			}
			else{
				$data['error'] = 'Error Occured!!! Please Try Again';
				$data['active'] = 'Register';
				$this->load->view('Authentication/registration',$data);
			}
		}
	}
}
