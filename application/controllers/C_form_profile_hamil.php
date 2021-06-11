<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class C_form_profile_hamil extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        if (($this->session->userdata('email')=="" OR empty($this->session->userdata('email')))) {
            $this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Silahkan Login Sebagai Admin</font></span>");
            redirect('C_login');
        }

        $this->load->model('M_form_informasi_hamil');
        //$this->load->model('');
        //$this->load->model('m_siswa');
    }
    // mobile-based
	public function index()
	{
        $email =$this->session->userdata('email');
        $data["rs_data"] = $this->M_form_informasi_hamil->getAllinformasiByid($email);
        
		$this->template->load('static','form_informasi_hamil',$data);
	}

    // public function create()
	// {
	// 	$this->template->load('static','C_faq');
	// }

    // public function edit($id)
	// {
    //     $data["id"]=$id;
    //     $data["rs_faq"] = $this->M_faq->getAllfaqById($id);
	// 	$this->template->load('static','U_faq',$data);
	// }

    public function post_create()
	{
        $where = array('email'=>$this->session->userdata('email'));
        $data = array(
            // 'id_faq'   =>$this->input->post('kode_faq'),
            'nama' =>$this->input->post('nama'),
            'tempat_lahir' =>$this->input->post('tempat_lahir'),
            'tgl_lahir' =>$this->input->post('tgl_lahir'),
            'bln_kehamilan' =>$this->input->post('bln_kehamilan'),
            'agama' =>$this->input->post('agama'),
            'pendidikan_terakhir' =>$this->input->post('pendidikan_terakhir'),
            'gol_darah' =>$this->input->post('gol_darah'),
            'pekerjaan' =>$this->input->post('pekerjaan'),
        );
        $edit = $this->M_form_informasi_hamil->edit($data,$where);
        if($edit){
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }

        redirect("C_form_profile_hamil");
	}

    public function download()
	{
        $email = $this->session->userdata('email');
        $data["rs_data"] = $this->db->query("select * From t_login where email ='$email'")->result();
        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('profile_download',$data,true);
        $mpdf->WriteHTML($html);
        //$mpdf->Output('Profile kehamilan.pdf'); // buka dengan browser
        $mpdf->Output('Profile kehamilan.pdf','D'); // ini akan mendownload file dengan nama alaiakbar_mPDF
    }

    // public function post_edit($id)
	// {
    //     $where = array('id_faq'=>$id);
    //     $data = array(
    //         // 'kode_faq'   =>$this->input->post('kode_faq'),
    //         'ask' =>$this->input->post('ask'),
    //         'question' =>$this->input->post('question'),
    //         'status_faq' =>$this->input->post('status_faq'),
    //     );
    //     $edit = $this->M_faq->edit($data,$where);
    //     if($edit){
    //         $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
    //     }else{
    //         $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
    //     }

    //     redirect("C_setup_faq/edit/".$id);
	// }

    // public function delete($id)
	// {
    //     $where = array('id_faq'=>$id);
        
    //     $delete = $this->M_faq->delete($where);
    //     if($delete){
    //         $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
    //     }else{
    //         $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
    //     }

    //     redirect("C_setup_faq");
	// }
    // // web based
    // public function index_web()
	// {
    //     $data["rs_faq"] = $this->M_faq->getAllfaq();
	// 	$this->template->load('static_web','setup_faq_web',$data);
	// }

    // public function create_web()
	// {
	// 	$this->template->load('static_web','C_faq_web');
	// }

    // public function edit_web($id)
	// {
    //     $data["id"]=$id;
    //     $data["rs_faq"] = $this->M_faq->getAllfaqById($id);
	// 	$this->template->load('static_web','U_faq_web',$data);
	// }

    // public function post_create_web()
	// {
    //     $data = array(
    //         // 'id_faq'   =>$this->input->post('kode_faq'),
    //         'ask' =>$this->input->post('ask'),
    //         'question' =>$this->input->post('question'),
    //         'status_faq' =>$this->input->post('status_faq'),
    //     );
    //     $create = $this->M_faq->create($data);
    //     if($create){
    //         $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
    //     }else{
    //         $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
    //     }
    //     redirect("C_setup_faq/index_web");
	// }

    // public function post_edit_web($id)
	// {
    //     $where = array('id_faq'=>$id);
    //     $data = array(
    //         'ask' =>$this->input->post('ask'),
    //         'question' =>$this->input->post('question'),
    //         'status_faq' =>$this->input->post('status_faq'),
    //     );
    //     $edit = $this->M_faq->edit($data,$where);
    //     if($edit){
    //         $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
    //     }else{
    //         $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
    //     }

    //     redirect("C_setup_faq/edit_web/".$id);
	// }

    // public function delete_web($id)
	// {
    //     $where = array('id_faq'=>$id);
        
    //     $delete = $this->M_faq->delete($where);
    //     if($delete){
    //         $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
    //     }else{
    //         $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
    //     }

    //     redirect("C_setup_faq/index_web");
	// }
}