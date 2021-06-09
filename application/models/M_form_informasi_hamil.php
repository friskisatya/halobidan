<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_form_informasi_hamil extends CI_Model {

	public function getAllinformasi()
	{
		return $this->db->get('t_login')->result();
	}

	public function getAllinformasiById($email)
	{
		$data = array('email'=>$email);
		$this->db->where($data);
		return $this->db->get('t_login')->result();
	}

	public function create($data){
		if($this->db->insert('t_faq', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function create_riwayat($data){
		if($this->db->insert('t_riwayat_checkup', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function edit($data,$where){
		$this->db->where($where);
		if($this->db->update('t_login', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function delete($where){
		$this->db->where($where);
		if($this->db->delete('t_faq')){
			return true;
		}else{
			return false;
		}
	}

}
