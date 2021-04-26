<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class C_index extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        // $this->load->model('M_login');
        //$this->load->model('m_siswa');
    }

	public function index()
	{
		$this->template->load('static','index');
	}
}