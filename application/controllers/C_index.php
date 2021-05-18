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
    
    public function index_web()
	{
        $this->template->load('static_web','index_web');
	}

    public function chat_bidan()
	{
        $data['rs_bidan'] = $this->M_bidan->getAllBidan();
        $data['rs_klinik'] = $this->M_klinik->getAllKlinik();
		$this->template->load('static','chat_bidan',$data);
	}

    public function konsultasi_klinik()
	{
        //$data['rs_klinik'] = $this->M_klinik->getAllKlinik();
        $data['rs_klinik'] = $this->M_klinik->getAllKlinik();
		$this->template->load('static','list_klinik',$data);
	}

    public function detail_klinik($id_klinik)
	{
        $data['rs_klinik'] = $this->M_klinik->getAllKlinikById($id_klinik);
		$this->template->load('static','detail_klinik',$data);
	}
}