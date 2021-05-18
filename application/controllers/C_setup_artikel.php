<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class C_setup_artikel extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        if (($this->session->userdata('email')=="" OR empty($this->session->userdata('email')))OR$this->session->userdata('status_admin')!=1) {
            $this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Silahkan Login Sebagai Admin</font></span>");
            redirect('C_login');
        }
        //$this->load->model('M_bidan');
        $this->load->model('M_artikel');
        //$this->load->model('m_siswa');
    }
    // mobile-based
	public function index()
	{
        $data["rs_artikel"] = $this->M_artikel->getAllartikel();
		$this->template->load('static','setup_artikel',$data);
	}

    public function create()
	{
		$this->template->load('static','C_artikel');
	}

    public function edit($id)
	{
        $data["id"]=$id;
        $data["rs_artikel"] = $this->M_artikel->getAllartikelById($id);
		$this->template->load('static','U_artikel',$data);
	}

    public function post_create()
	{
        $data = array(
            // 'id_artikel'   =>$this->input->post('kode_artikel'),
            'judul_artikel' =>$this->input->post('judul_artikel'),
            'isi_artikel' =>$this->input->post('isi_artikel'),
            'status_artikel'        =>$this->input->post('status_artikel'),
        );
        $create = $this->M_artikel->create($data);
        if($create){
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }
        redirect("C_setup_artikel/index");
	}

    public function post_edit($id)
	{
        $where = array('id_artikel'=>$id);
        $data = array(
            // 'kode_artikel'   =>$this->input->post('kode_artikel'),
            'judul_artikel' =>$this->input->post('judul_artikel'),
            'isi_artikel' =>$this->input->post('isi_artikel'),
            'status_artikel'        =>$this->input->post('status_artikel'),
        );
        $edit = $this->M_artikel->edit($data,$where);
        if($edit){
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }

        redirect("C_setup_artikel/edit/".$id);
	}

    public function delete($id)
	{
        $where = array('id_artikel'=>$id);
        
        $delete = $this->M_artikel->delete($where);
        if($delete){
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
        }else{
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
        }

        redirect("C_setup_artikel");
	}
    // web based
    public function index_web()
	{
        $data["rs_artikel"] = $this->M_artikel->getAllartikel();
		$this->template->load('static_web','setup_artikel_web',$data);
	}

    public function create_web()
	{
		$this->template->load('static_web','C_artikel_web');
	}

    public function edit_web($id)
	{
        $data["id"]=$id;
        $data["rs_artikel"] = $this->M_artikel->getAllartikelById($id);
		$this->template->load('static_web','U_artikel_web',$data);
	}

    public function post_create_web()
	{
        $data = array(
            // 'id_artikel'   =>$this->input->post('kode_artikel'),
            'judul_artikel' =>$this->input->post('judul_artikel'),
            'isi_artikel' =>$this->input->post('isi_artikel'),
            'status_artikel'        =>$this->input->post('status_artikel'),
        );
        $create = $this->M_artikel->create($data);
        if($create){
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }
        redirect("C_setup_artikel/index_web");
	}

    public function post_edit_web($id)
	{
        $where = array('id_artikel'=>$id);
        $data = array(
            'judul_artikel' =>$this->input->post('judul_artikel'),
            'isi_artikel' =>$this->input->post('isi_artikel'),
            'status_artikel'        =>$this->input->post('status_artikel'),
        );
        $edit = $this->M_artikel->edit($data,$where);
        if($edit){
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }

        redirect("C_setup_artikel/edit_web/".$id);
	}

    public function delete_web($id)
	{
        $where = array('id_artikel'=>$id);
        
        $delete = $this->M_artikel->delete($where);
        if($delete){
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
        }else{
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
        }

        redirect("C_setup_artikel/index_web");
	}
}