<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class C_setup_tentang extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        if (($this->session->userdata('email')=="" OR empty($this->session->userdata('email')))OR$this->session->userdata('status_admin')!=1) {
            $this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Silahkan Login Sebagai Admin</font></span>");
            redirect('C_login');
        }
        //$this->load->model('M_bidan');
        $this->load->model('M_tentang');
        //$this->load->model('m_siswa');
    }
    // mobile-based
	public function index()
	{
        $data["rs_tentang"] = $this->M_tentang->getAlltentang();
		$this->template->load('static','setup_tentang',$data);
	}

    public function create()
	{
		$this->template->load('static','C_tentang');
	}

    public function edit($id)
	{
        $data["id"]=$id;
        $data["rs_tentang"] = $this->M_tentang->getAlltentangById($id);
		$this->template->load('static','U_tentang',$data);
	}

    public function post_create()
	{
        $data = array(
            'tentang' =>$this->input->post('tentang')
        );
        $create = $this->M_tentang->create($data);
        if($create){
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }
        redirect("C_setup_tentang/index");
	}

    public function post_edit($id)
	{
        $where = array('id_tentang'=>$id);
        $data = array(
            'tentang' =>$this->input->post('tentang'),
        );
        $edit = $this->M_tentang->edit($data,$where);
        if($edit){
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }

        redirect("C_setup_tentang/edit/".$id);
	}

    public function delete($id)
	{
        $where = array('id_tentang'=>$id);
        
        $delete = $this->M_tentang->delete($where);
        if($delete){
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
        }else{
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
        }

        redirect("C_setup_tentang");
	}
    // web based
    public function index_web()
	{
        $data["rs_tentang"] = $this->M_tentang->getAlltentang();
		$this->template->load('static_web','setup_tentang_web',$data);
	}

    public function create_web()
	{
		$this->template->load('static_web','C_tentang_web');
	}

    public function edit_web($id)
	{
        $data["id"]=$id;
        $data["rs_tentang"] = $this->M_tentang->getAlltentangById($id);
		$this->template->load('static_web','U_tentang_web',$data);
	}

    public function post_create_web()
	{
        $data = array(
            'tentang' =>$this->input->post('tentang'),
        );
        $create = $this->M_tentang->create($data);
        if($create){
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }
        redirect("C_setup_tentang/index_web");
	}

    public function post_edit_web($id)
	{
        $where = array('id_tentang'=>$id);
        $data = array(
            'tentang' =>$this->input->post('tentang')
        );
        $edit = $this->M_tentang->edit($data,$where);
        if($edit){
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }

        redirect("C_setup_tentang/edit_web/".$id);
	}

    public function delete_web($id)
	{
        $where = array('id_tentang'=>$id);
        
        $delete = $this->M_tentang->delete($where);
        if($delete){
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
        }else{
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
        }

        redirect("C_setup_tentang/index_web");
	}
}