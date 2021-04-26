<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function auth($email, $password)
	{
		$query = $this->db->query("SELECT * FROM t_login WHERE email = '$email' AND password = '$password' AND status = 1 ");
		if ($query->num_rows() > 0) 
		{
			return 0;
		}
		else
		{
			return 1;
		}
		
	}

}
