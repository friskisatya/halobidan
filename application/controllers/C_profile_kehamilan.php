<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class C_profile_kehamilan extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        if ($this->session->userdata('email')=="" OR empty($this->session->userdata('email'))) {
            $this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Silahkan Login Terlebih Dahulu</font></span>");
            redirect('C_login');
        }
        //$this->load->model('M_bidan');
        //$this->load->model('M_klinik');
        //$this->load->model('m_siswa');
    }

	public function index()
	{
        $email = $this->session->userdata('email');
        $rs_data = $this->db->query("SELECT * FROM t_login where email ='$email'")->result();
        $birthDate = new DateTime($rs_data[0]->tgl_lahir);
        $today = new DateTime("today");
        // if ($birthDate > $today) { 
        //     exit("0 tahun 0 bulan 0 hari");
        // }
        $y = $today->diff($birthDate)->y;
        $m = $today->diff($birthDate)->m;
        $d = $today->diff($birthDate)->d;


        $data["rs_riwayat"] = $this->db->query("
            select 
            *
            from
            (select distinct tgl_checkup From t_riwayat_checkup a where a.email = '$email' order by a.tgl_checkup desc limit 4)t
            order by t.tgl_checkup asc
        ")->result();



        $data["rs_data"] = $rs_data;
        $data["usia"] = $y;


		$this->template->load('static','profile_kehamilan',$data);
	}
}