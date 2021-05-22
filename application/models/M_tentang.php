<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tentang extends CI_Model {

	public function getAlltentang()
	{
		return $this->db->get('t_tentang')->result();
	}

	public function getAlltentangById($id_tentang)
	{
		$data = array('id_tentang'=>$id_tentang);
		$this->db->where($data);
		return $this->db->get('t_tentang')->result();
	}

	public function create($data){
		if($this->db->insert('t_tentang', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function edit($data,$where){
		$this->db->where($where);
		if($this->db->update('t_tentang', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function delete($where){
		$this->db->where($where);
		if($this->db->delete('t_tentang')){
			return true;
		}else{
			return false;
		}
	}

}
