<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminM extends CI_model {
	public function login($data){
		$this->load->database();
		$this->db->select('*');
		$this->db->from('admin_user');
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);
		$res = $this->db->get();
		if($res->num_rows() == 1){
			return TRUE;
		}
		else
			return FALSE;
	}
	public function cuploadm($data){
		$this->load->database();
		$this->db->insert('tbl_caurosel',$data);
		if($this->db->insert_id())
			return TRUE;
		else
			return FALSE;
	}
	public function testuploadm($data){
		$this->load->database();
		$this->db->insert('tbl_testimonials',$data);
		if($this->db->insert_id())
			return TRUE;
		else
			return FALSE;
	}
}