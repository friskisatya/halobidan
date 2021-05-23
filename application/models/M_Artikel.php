<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_artikel extends CI_Model {

	public function getAllartikel()
	{
		return $this->db->get('t_artikel')->result();
	}

	public function getAllartikelActive()
	{
		$this->db->where(array('status_artikel'=>0));
		return $this->db->get('t_artikel')->result();
	}

	public function getAllartikelById($id_artikel)
	{
		$data = array('id_artikel'=>$id_artikel);
		$this->db->where($data);
		return $this->db->get('t_artikel')->result();
	}

	public function create($data){
		if($this->db->insert('t_artikel', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function edit($data,$where){
		$this->db->where($where);
		if($this->db->update('t_artikel', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function delete($where){
		$this->db->where($where);
		if($this->db->delete('t_artikel')){
			return true;
		}else{
			return false;
		}
	}

}
