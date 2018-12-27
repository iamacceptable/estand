<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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
			$data['active'] = 'homepage';
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
				$this->homepage();
				echo '<script language="javascript">alert("Please Choose a valid image to upload!!")</script>';												
				
			}
			else{
				$ud = $this->upload->data();
				$post = array('ctitle' => $this->input->post('ctitle'),
					'cdescription' => $this->input->post('cdescription'),
					'cname' => $this->input->post('cimg'),
					'cpath' => base_url('assets/uploads/caurosel/'.$ud['raw_name'].$ud['file_ext']) 
				);
				$this->load->model('AdminM');
				if($this->AdminM->cuploadm($post))
				{
					echo '<script language="javascript">alert("Caurosel Image Successfully Uploaded")</script>';
					$this->index();
				}
				else{
					echo '<script language="javascript">alert("Caurosel Image Not Properly Uploaded to Database..Please Try Again!!!")</script>';					
				}
			}
		}
	}
}
