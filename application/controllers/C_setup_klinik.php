<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class C_setup_klinik extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        if (($this->session->userdata('email')=="" OR empty($this->session->userdata('email')))OR$this->session->userdata('status_admin')!=1) {
            $this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Silahkan Login Sebagai Admin</font></span>");
            redirect('C_login');
        }
        //$this->load->model('M_bidan');
        //$this->load->model('M_klinik');
        //$this->load->model('m_siswa');
    }

	public function index()
	{
		$this->template->load('static','setup_klinik');
	}
}