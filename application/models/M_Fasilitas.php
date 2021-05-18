<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Fasilitas extends CI_Model {

	public function getAllfasilitas()
	{
		return $this->db->get('t_fasilitas')->result();
	}

	public function getAllfasilitasById($id_fasilitas)
	{
		$data = array('id_fasilitas'=>$id_fasilitas);
		$this->db->where($data);
		return $this->db->get('t_fasilitas')->result();
	}

	public function create($data){
		if($this->db->insert('t_fasilitas', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function edit($data,$where){
		$this->db->where($where);
		if($this->db->update('t_fasilitas', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function delete($where){
		$this->db->where($where);
		if($this->db->delete('t_fasilitas')){
			return true;
		}else{
			return false;
		}
	}

}
