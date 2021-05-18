<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class C_setup_bidan extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        if (($this->session->userdata('email')=="" OR empty($this->session->userdata('email')))OR$this->session->userdata('status_admin')!=1) {
            $this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Silahkan Login Sebagai Admin</font></span>");
            redirect('C_login');
        }
        //$this->load->model('M_bidan');
        $this->load->model('M_bidan');
        //$this->load->model('m_siswa');
    }
    // mobile-based
	public function index()
	{
        $data["rs_bidan"] = $this->M_bidan->getAllbidan();
		$this->template->load('static','setup_bidan',$data);
	}

    public function create()
	{
		$this->template->load('static','C_bidan');
	}

    public function edit($id)
	{
        $data["id"]=$id;
        $data["rs_bidan"] = $this->M_bidan->getAllbidanById($id);
		$this->template->load('static','U_bidan',$data);
	}

    public function post_create()
	{
        $data = array(
            // 'id_bidan'   =>$this->input->post('kode_bidan'),
            'nama_bidan' =>$this->input->post('nama_bidan'),
            // 'status'        =>$this->input->post('status'),
            'mulai_bekerja'        =>$this->input->post('mulai_bekerja'),
            'alamat_bidan'        =>$this->input->post('alamat_bidan'),
            'telp_bidan'        =>$this->input->post('telp_bidan'),
            'gelar'        =>$this->input->post('gelar'),
            // klinik
            // pic
            
        );
        $create = $this->M_bidan->create($data);
        if($create){
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }
        redirect("C_setup_bidan/index");
	}

    public function post_edit($id)
	{
        $where = array('id_bidan'=>$id);
        $data = array(
            'nama_bidan' =>$this->input->post('nama_bidan'),
            // 'status'        =>$this->input->post('status'),
            'mulai_bekerja'        =>$this->input->post('mulai_bekerja'),
            'alamat_bidan'        =>$this->input->post('alamat_bidan'),
            'telp_bidan'        =>$this->input->post('telp_bidan'),
            'gelar'        =>$this->input->post('gelar'),
        );
        $edit = $this->M_bidan->edit($data,$where);
        if($edit){
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }

        redirect("C_setup_bidan/edit/".$id);
	}

    public function delete($id)
	{
        $where = array('id_bidan'=>$id);
        
        $delete = $this->M_bidan->delete($where);
        if($delete){
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
        }else{
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
        }

        redirect("C_setup_bidan");
	}
    // web based
    public function index_web()
	{
        $data["rs_bidan"] = $this->M_bidan->getAllbidan();
		$this->template->load('static_web','setup_bidan_web',$data);
	}

    public function create_web()
	{
		$this->template->load('static_web','C_bidan_web');
	}

    public function edit_web($id)
	{
        $data["id"]=$id;
        $data["rs_bidan"] = $this->M_bidan->getAllbidanById($id);
		$this->template->load('static_web','U_bidan_web',$data);
	}

    public function post_create_web()
	{
        $data = array(
            'nama_bidan' =>$this->input->post('nama_bidan'),
            // 'status'        =>$this->input->post('status'),
            'mulai_bekerja'        =>$this->input->post('mulai_bekerja'),
            'alamat_bidan'        =>$this->input->post('alamat_bidan'),
            'telp_bidan'        =>$this->input->post('telp_bidan'),
            'gelar'        =>$this->input->post('gelar'),
        );
        $create = $this->M_bidan->create($data);
        if($create){
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }
        redirect("C_setup_bidan/index_web");
	}

    public function post_edit_web($id)
	{
        $where = array('id_bidan'=>$id);
        $data = array(
            'nama_bidan' =>$this->input->post('nama_bidan'),
            // 'status'        =>$this->input->post('status'),
            'mulai_bekerja'        =>$this->input->post('mulai_bekerja'),
            'alamat_bidan'        =>$this->input->post('alamat_bidan'),
            'telp_bidan'        =>$this->input->post('telp_bidan'),
            'gelar'        =>$this->input->post('gelar'),
        );
        $edit = $this->M_bidan->edit($data,$where);
        if($edit){
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }

        redirect("C_setup_bidan/edit_web/".$id);
	}

    public function delete_web($id)
	{
        $where = array('id_bidan'=>$id);
        
        $delete = $this->M_bidan->delete($where);
        if($delete){
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
        }else{
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
        }

        redirect("C_setup_bidan/index_web");
	}
}