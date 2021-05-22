<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class C_tentang extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        //$this->load->model('M_bidan');
        //$this->load->model('M_klinik');
        //$this->load->model('m_siswa');
    }

	public function index()
	{
        $data["rs_tentang"] = $this->db->get('t_tentang')->result();
		$this->template->load('static','tentang',$data);
	}
}