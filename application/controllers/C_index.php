<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class C_index extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        $this->load->model('M_bidan');
        $this->load->model('M_klinik');
        $this->load->model('M_faq');
        $this->load->model('M_artikel');
        //$this->load->model('m_siswa');
    }

	public function index()
	{
        $data["rs_artikel"]= $this->M_artikel->getAllartikelActive();
        $this->template->load('static','index',$data);
	}
    
    public function index_web()
	{
        $this->template->load('static_web','index_web');
	}

    public function artikel($id)
	{
        $data["rs_artikel"]=$this->M_artikel->getAllartikelById($id);
        $data["rs_artikel_all"]= $this->M_artikel->getAllartikelActive();
        $this->template->load('static','artikel',$data);
	}

    public function chat_bidan()
	{
        if ($this->session->userdata('email')=="" OR empty($this->session->userdata('email'))) {
            $this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Silahkan Login Terlebih Dahulu</font></span>");
            redirect('C_login');
        }
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

    public function faq()
	{
        //$data['rs_klinik'] = $this->M_klinik->getAllKlinik();
        $data['rs_faq'] = $this->M_faq->getAllfaq();
		$this->template->load('static','faq',$data);
	}

    public function kalkulator_kehamilan()
	{
        //$data['rs_klinik'] = $this->M_klinik->getAllKlinik();
        //$data['rs_klinik'] = $this->M_klinik->getAllKlinik();
        if($this->input->post('tanggal_haid')!="" && $this->input->post('tanggal_haid')!=null){
            //echo $this->input->post('tanggal_haid');
            //echo $this->input->post('siklus_haid');
            

            $hpt=date_create($this->input->post('tanggal_haid'));
            //var_dump($hpt);die;
            $hp=date_create($this->input->post('tanggal_haid'));
            //date_add($date,date_interval_create_from_date_string("40 days"));
            //echo date_format($hpt,"Y-m-d");die
            $lama_siklus = $this->input->post('siklus_haid')-21;

            $total = $lama_siklus + 270;
            $data["tgl_input"]=$this->input->post('tanggal_haid');
            $data["hpt"] = date_add($hpt,date_interval_create_from_date_string($total." days"));
            //echo date_format($date,"Y-m-d");
            
            $data["hp"] = date_add($hp,date_interval_create_from_date_string("14 days"));

            $sekarang = new DateTime();

            $perbedaan = $data["hp"]->diff($sekarang);

            //$uj = date_add($hpt,date_interval_create_from_date_string("14 days"))

            $sekarang = new DateTime();

            $uj = $data["hp"]->diff($sekarang);

            $uj_minggu_ex1 = explode(".",($uj->days/7));  
            $uj_minggu_ex2 = explode(",",$uj_minggu_ex1[0]);  
            $data["uj_mingggu"] = $uj_minggu_ex2[0];  

            $data["uj_hari"] = $uj->days % 7; 


            //var_dump($data["hp"]);die;
            
        }else{
            $data["tgl_input"]="";
            $data["hp"]="";
            $data["hpt"]="";
        }
        
		$this->template->load('static','kalkulator',$data);
	}

    public function detail_klinik($id_klinik)
	{
        $data['rs_klinik'] = $this->M_klinik->getAllKlinikById($id_klinik);
		$this->template->load('static','detail_klinik',$data);
	}
}