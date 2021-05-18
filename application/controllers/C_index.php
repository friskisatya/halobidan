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

    public function kalkulator_kehamilan()
	{
        //$data['rs_klinik'] = $this->M_klinik->getAllKlinik();
        //$data['rs_klinik'] = $this->M_klinik->getAllKlinik();
        if($this->input->post('tanggal_haid')!="" && $this->input->post('tanggal_haid')!=null){
            //echo $this->input->post('tanggal_haid');
            //echo $this->input->post('siklus_haid');
            

            $hpt=date_create($this->input->post('tanggal_haid'));
            $hp=date_create($this->input->post('tanggal_haid'));
            //date_add($date,date_interval_create_from_date_string("40 days"));
            //echo date_format($date,"Y-m-d");

            $lama_siklus = $this->input->post('siklus_haid')-21;

            $total = $lama_siklus + 180;
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