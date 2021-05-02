<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class C_profile_kehamilan extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        //$this->load->model('M_bidan');
        //$this->load->model('M_klinik');
        //$this->load->model('m_siswa');
    }

	public function index()
	{
		$this->template->load('static','profile_kehamilan');
	}
}