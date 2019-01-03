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
	public function fetch_mcaurosel(){
		$this->load->database();
		$this->db->select('*');
		$this->db->from('tbl_caurosel');
		$res = $this->db->get();
		return $res->result_array();
	}
	public function fetchgolucm($id){
		$this->load->database();
		$this->db->select('cname');
		$this->db->from('tbl_caurosel');
		$this->db->where('cid',$id);
		$res = $this->db->get();
		if($res->num_rows() == 1){
		return $res->result_array()[0]['cname'];
		}
		else
		return FALSE;
	}
	public function cdeletem($id){
		$this->load->database();
		$this->db->where('cid',$id);
		$this->db->delete('tbl_caurosel');
	}
	public function fetch_musers(){
		$this->load->database();
		$this->db->select('*');
		$this->db->from('tbl_users');
		$res = $this->db->get();
		return $res->result_array();
	}
	public function fetch_mtestimonioals(){
		$this->load->database();
		$this->db->select('*');
		$this->db->from('tbl_testimonials');
		$res = $this->db->get();
		return $res->result_array();
	}
}