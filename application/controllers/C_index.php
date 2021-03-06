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
        $this->load->model('M_form_informasi_hamil');
        $this->load->model('M_screening');
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
    public function screening()
	{
        $email = $this->session->userdata('email');
        $cek_informasi = $this->db->query("SELECT * FROM t_login where email = '$email' ")->result();
        if($cek_informasi[0]->tempat_lahir ==""){
            $this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Silahkan lengkapi form ini terlebih dahulu</font></span>");
            redirect('C_form_profile_hamil');
        }
        $data["rs_data"] = $this->M_screening->getAllScreeningHistory($this->session->userdata('email'));
		$this->template->load('static','screening',$data);
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
            // $hp=date_create($this->input->post('tanggal_haid'));
            //date_add($date,date_interval_create_from_date_string("40 days"));
            //echo date_format($hpt,"Y-m-d");die
            // $lama_siklus = $this->input->post('siklus_haid')-21;

            $total = 7;
            $total2 = 9;
            $data["tgl_input"]=$this->input->post('tanggal_haid');
            $a = date_add($hpt,date_interval_create_from_date_string($total." days"));
            $data["hpt"] = date_add($a,date_interval_create_from_date_string($total2." month"));
            //echo date_format($date,"Y-m-d");
            
            // $data["hp"] = date_add($hp,date_interval_create_from_date_string("14 days"));

            //$sekarang = new DateTime();

            //$perbedaan = $data["hp"]->diff($sekarang);

            //$uj = date_add($hpt,date_interval_create_from_date_string("14 days"))

            //$sekarang = new DateTime();

            // $uj = $data["hp"]->diff($sekarang);

            // $uj_minggu_ex1 = explode(".",($uj->days/7));  
            
            // $uj_minggu_ex2 = explode(",",$uj_minggu_ex1[0]);  
            //var_dump($uj_minggu_ex2[0]);die;
            // $data["uj_minggu"] = $uj_minggu_ex2[0];  

            // $data["uj_hari"] = $uj->days % 7; 


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

    public function post_riwayat_checkup()
	{

        $email = $this->session->userdata('email');
        $data = array(
            // 'id_faq'   =>$this->input->post('kode_faq'),
            'tgl_checkup' =>$this->input->post('tgl_checkup'),
            'email' =>$email,
        );
        $create = $this->M_form_informasi_hamil->create_riwayat($data);
        if($create){
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }
        redirect("C_profile_kehamilan");
	}

    public function post_riwayat_checkup_wa()
	{

        $email = $this->session->userdata('email');
        $data = array(
            // 'id_faq'   =>$this->input->post('kode_faq'),
            'tgl_checkup' =>date("Y-m-d"),
            'email' =>$email,
        );
        $create = $this->M_form_informasi_hamil->create_riwayat($data);
        if($create){
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }
        echo json_encode();
	}

    
}