<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	var $data = ['error','success'];
	public function index()
	{
		if(!isset($_SESSION['admin'])){
		$data['active'] = 'login';
		$this->load->view('Admin/admin_login',$data);
		}
		else
			redirect('Admin/homepage');
	}
	public function login()
	{
		$this->form_validation->set_rules('adminusername', 'Username', 'required');
		$this->form_validation->set_rules('adminpassword', 'Password', 'required');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			$data = array(
				'username' => $this->input->post('adminusername'),
				'password' => md5($this->input->post('adminpassword'))
			);
			$this->load->model('AdminM');
			$result = $this->AdminM->login($data);
			if($result == TRUE){
				$admin = array(
					'admin' => 'adminlogin'
				);
				$this->session->set_userdata($admin);
				redirect('Admin/homepage');
			}
			else{
				$data['active'] = 'login';
				$data['error'] = 'Username and Password do not match. Please try again with right ceredentials or contact developer.';
				$this->load->view('Admin/admin_login',$data);
			}
		}
	}
	public function homepage()
	{	
		if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'adminlogin'){
			$this->load->model('AdminM');
			if(isset($this->data['error'])){
			$data['error'] = $this->data['error'];}
			if(isset($this->data['success'])){
			$data['success'] = $this->data['success']; }
			$data['active'] = 'homepage';
			$data['caurosel'] = $this->AdminM->fetch_mcaurosel();
			$this->load->view('Admin/admin_homepage',$data);
		}
		else
			redirect('Admin');
	}
	public function logout(){
		$this->session->unset_userdata('admin');
		$this->index();
	}
	public function cupload(){
		$this->load->library('upload');
		$this->form_validation->set_rules('ctitle', 'Title', 'required');
		$this->form_validation->set_rules('cdescription', 'Description','required');
		if($this->form_validation->run() == FALSE){
			$this->homepage();
		}
		else{
			$config['upload_path'] = './assets/uploads/caurosel';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '6144000';
		    $config['max_width'] = '40000';
		    $config['max_height'] = '40000';
		    $this->upload->initialize($config);
			if(! $this->upload->do_upload('cauroselgolu')){
					$this->data['error'] = "Please Choose a Valid Image!!";
					$this->homepage();
			}
			else{
				$ud = $this->upload->data();
				$post = array('ctitle' => $this->input->post('ctitle'),
					'cdescription' => $this->input->post('cdescription'),
					'cname' => $ud['raw_name'].$ud['file_ext'],
					'cpath' => base_url('assets/uploads/caurosel/'.$ud['raw_name'].$ud['file_ext']) 
				);
				$this->load->model('AdminM');
				if($this->AdminM->cuploadm($post))
				{
					$this->data['success'] = "Caurosel Uploaded Successfully";
					$this->homepage();
				}
				else{
					$this->data['error'] = "Caurosel Upload Unsuccessfull";					
					$this->homepage();					
				}
			}
		}
	}
	public function testupload(){
		$this->load->library('upload');
		$this->form_validation->set_rules('tname', 'Name', 'required');
		$this->form_validation->set_rules('tdesignation','Designation', 'required');
		$this->form_validation->set_rules('tmessage', 'Message', 'required');
		if($this->form_validation->run() == FALSE){
			$this->homepage();
		}
		else{
			$config['upload_path'] = './assets/uploads/testimonials';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '6144000';
		    $config['max_width'] = '40000';
			$config['max_height'] = '40000';
			$this->upload->initialize($config);
			if(! $this->upload->do_upload('testgolu')){
					$this->data['error'] = "Please Choose a Valid Image!!";
					$this->homepage();
			}
			else{
				$td = $this->upload->data();
				$post = array(
					'tname' => $this->input->post('tname'),
					'tdesignation' => $this->input->post('tdesignation'),
					'tmessage' => $this->input->post('tmessage'),
					'timg' => $td['raw_name'].$td['file_ext'],
					'tpath' => base_url('assets/uploads/testimonials/'.$td['raw_name'].$td['file_ext'])
				);
				$this->load->model('AdminM');
				if($this->AdminM->testuploadm($post)){
					$this->data['success'] = "Testimonial Uploaded Successfully";
					$this->homepage();
				}
				else{
					$this->data['error'] = "Testimonial Upload Unsuccessfull!!!";
					$this->homepage();
				}
			}
		}
	}
	public function cdelete($id){
		$this->load->model('AdminM');
		if($fn = $this->AdminM->fetchgolucm($id)){
			unlink('assets/uploads/caurosel/'.$fn);
			$this->AdminM->cdeletem($id);
			$this->data['success'] = "Caurosel Deleted Successfully";
			$this->homepage();
		}
		else{
			$this->data['error'] = "Deletion Unsucessfull";
			$this->homepage();
		}
	}
}
