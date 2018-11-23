<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_model {
	public function login($data){
		$this->load->database();
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('u_email',$data['u_email']);
		$this->db->where('u_password',$data['u_password']);
		$res = $this->db->get();
		if($res->num_rows() == 1){
			$result = $res->result_array();
			return $result[0];
		}
		else
			return FALSE;
	}
	public function register($data){
		$this->load->database();
		$this->db->insert('tbl_users',$data);
		if($id = $this->db->insert_id()){
			return $id;
		}
		else
			return FALSE;
	}
	public function fetchuser($id){
		$this->load->database();
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('u_id',$id);
		$res = $this->db->get();
		if($res->num_rows() == 1){
			$result = $res->result_array();
			return $result[0];
		}
		else
			return FALSE;
	}
}