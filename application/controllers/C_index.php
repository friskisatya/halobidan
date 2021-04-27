<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class C_index extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        $this->load->model('M_bidan');
        $this->load->model('M_klinik');
        //$this->load->model('m_siswa');
    }

	public function index()
	{
		$this->template->load('static','index');
	}

    public function chat_bidan()
	{
        $data['rs_bidan'] = $this->M_bidan->getAllBidan();
        $data['rs_klinik'] = $this->M_klinik->getAllKlinik();
		$this->template->load('static','chat_bidan',$data);
	}
}