<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bidan extends CI_Model {

	public function getAllBidan()
	{
		return $this->db->get('t_bidan')->result();
	}

}
