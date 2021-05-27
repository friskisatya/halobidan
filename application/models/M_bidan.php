<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bidan extends CI_Model {

	public function getAllbidan()
	{
		return $this->db->get('t_bidan')->result();
	}

	public function getAllbidanById($id_bidan)
	{
		$data = array('id_bidan'=>$id_bidan);
		$this->db->where($data);
		return $this->db->get('t_bidan')->result();
	}

	public function create($data){
		if($this->db->insert('t_bidan', $data)){
			$this->db->trans_complete();
    		return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function edit($data,$where){
		$this->db->where($where);
		if($this->db->update('t_bidan', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function delete($where){
		$this->db->where($where);
		if($this->db->delete('t_bidan')){
			return true;
		}else{
			return false;
		}
	}

}
