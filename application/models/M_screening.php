<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_screening extends CI_Model {

	public function getAllscreening()
	{
		return $this->db->get('t_screening')->result();
	}

	// public function getAllartikelActive()
	// {
	// 	$this->db->where(array('status_artikel'=>0));
	// 	return $this->db->get('t_artikel')->result();
	// }

	// public function getAllartikelById($id_artikel)
	// {
	// 	$data = array('id_artikel'=>$id_artikel);
	// 	$this->db->where($data);
	// 	return $this->db->get('t_artikel')->result();
	// }

	public function create($data){
		if($this->db->insert('t_screening_history', $data)){
			$this->db->trans_complete();
    		return $this->db->insert_id();
		}else{
			return false;
		}
	}
	public function getAllScreeningHistory($email){
		$this->db->where(array('user_id'=>$email));
	 	return $this->db->get('t_screening_history')->result();
	}

	// public function edit($data,$where){
	// 	$this->db->where($where);
	// 	if($this->db->update('t_artikel', $data)){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }

	// public function delete($where){
	// 	$this->db->where($where);
	// 	if($this->db->delete('t_artikel')){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }

}
