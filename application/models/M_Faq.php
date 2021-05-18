<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_faq extends CI_Model {

	public function getAllfaq()
	{
		return $this->db->get('t_faq')->result();
	}

	public function getAllfaqById($id_faq)
	{
		$data = array('id_faq'=>$id_faq);
		$this->db->where($data);
		return $this->db->get('t_faq')->result();
	}

	public function create($data){
		if($this->db->insert('t_faq', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function edit($data,$where){
		$this->db->where($where);
		if($this->db->update('t_faq', $data)){
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
