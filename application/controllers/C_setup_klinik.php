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
        $this->load->model('M_klinik');
        //$this->load->model('m_siswa');
    }

	public function index()
	{
        $data["rs_klinik"] = $this->M_klinik->getAllKlinik();
		$this->template->load('static','setup_klinik',$data);
	}

    public function create()
	{
		$this->template->load('static','C_klinik');
	}

    public function edit($id)
	{
        $data["id"]=$id;
        $data["rs_klinik"] = $this->M_klinik->getAllKlinikById($id);
		$this->template->load('static','U_klinik',$data);
	}

    public function post_create()
	{
        $data = array(
            'nama_klinik'   =>$this->input->post('nama_klinik'),
            'alamat_klinik' =>$this->input->post('alamat_klinik'),
            'telp_klinik'   =>$this->input->post('telp_klinik'),
            'tentang'       =>$this->input->post('tentang'),
            'status'        =>$this->input->post('status'),
        );
        $create = $this->M_klinik->create($data);
        if($create){
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }
        redirect("C_setup_klinik/create");
	}

    public function post_edit($id)
	{
        $where = array('id_klinik'=>$id);
        $data = array(
            'nama_klinik'   =>$this->input->post('nama_klinik'),
            'alamat_klinik' =>$this->input->post('alamat_klinik'),
            'telp_klinik'   =>$this->input->post('telp_klinik'),
            'tentang'       =>$this->input->post('tentang'),
            'status'        =>$this->input->post('status'),
        );
        $edit = $this->M_klinik->edit($data,$where);
        if($edit){
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }

        redirect("C_setup_klinik/edit/".$id);
	}

    public function delete($id)
	{
        $where = array('id_klinik'=>$id);
        
        $delete = $this->M_klinik->delete($where);
        if($delete){
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
        }else{
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
        }

        redirect("C_setup_klinik");
	}
}