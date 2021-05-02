<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_klinik extends CI_Model {

	public function getAllKlinik()
	{
		return $this->db->get('t_klinik')->result();
	}

	public function getAllKlinikById($id_klinik)
	{
		$data = array('id_klinik'=>$id_klinik);
		$this->db->where($data);
		return $this->db->get('t_klinik')->result();
	}

}
