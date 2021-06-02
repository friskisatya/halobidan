<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class C_screening extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        if ($this->session->userdata('email')=="" OR empty($this->session->userdata('email'))) {
            $this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Silahkan Login Terlebih Dahulu</font></span>");
            redirect('C_login');
        }
        $this->load->model('M_screening');
    }
    
	public function index()
	{
        $data["rs_data"] = $this->M_screening->getAllScreeningHistory($this->session->userdata('email'));
		$this->template->load('static','screening',$data);
	}

    public function create()
	{
        $data["rs_screening"] = $this->M_screening->getAllscreening();
		$this->template->load('static','C_screening',$data);
	}

    public function edit($id)
	{
        $data["id"]=$id;
        $data["rs_screening"] = $this->M_screening->getAllscreening();
		$this->template->load('static','U_screening',$data);
	}

    public function post_create()
	{
        $email = $this->session->userdata('email');
        $check_row = $this->db->query("Select * From t_screening_history where user_id = '$email'")->num_rows();
        if($check_row < 6){
            $total_score = 2;

            $index = 0;
            $total_jawaban_ok=0;
            $data_detail = array();
            foreach($this->input->post('pertanyaan') as $pertanyaan){
                $jawaban = $this->input->post('jawaban')[$index];
                if($jawaban == "Y"){
                    $total_jawaban_ok = $total_jawaban_ok +1;
                }            
                $index++;
            }
            
            $total_score = $total_score + ($total_jawaban_ok *4);
            
            $data = array(
                'user_id'            =>$this->session->userdata('email'),
                'tanggal_screening'  =>date("Y-m-d"),
                'total_score'        =>$total_score,            
            );

            
            $create = $this->M_screening->create($data);

            $index_detail = 0;
            foreach($this->input->post('pertanyaan') as $pertanyaan){
                array_push($data_detail, array(
                    'id_screening_history'=>$create,
                    'id_screening' =>$this->input->post('pertanyaan')[$index_detail],
                    'jawaban'=>$this->input->post('jawaban')[$index_detail],
                ));
                
                $index_detail++;
            }
            $this->db->insert_batch('t_screening_history_detail', $data_detail);



            if($create){
                $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
            }else{
                $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
            }
        }else{
           
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data Sudah mencapai batas maksimal input</font></span>");
            redirect("C_screening/");
        }
        redirect("C_screening/preview/".$total_score);
	}

    public function preview($total_score){
        //$data["rs_data"] = $this->M_screening->getAllScreeningHistory($this->session->userdata('email'));
        $data["total_skor"]=$total_score;
		$this->template->load('static','post_screening',$data);
    }
    public function create_survei()
	{
		$this->template->load('static','C_survei');
	}
    public function survei()
	{
		$this->template->load('static','survei');
	}

    public function post_create_survei()
	{
        $data = array(
            // 'id_faq'   =>$this->input->post('kode_faq'),
            'ask' =>$this->input->post('ask'),
            'question' =>$this->input->post('question'),
            'status_faq' =>$this->input->post('status_faq'),
        );
        $create = $this->M_faq->create($data);
        if($create){
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }
        redirect("C_setup_faq/index");
	}


    public function post_edit($id)
	{
        $where = array('id_faq'=>$id);
        $data = array(
            // 'kode_faq'   =>$this->input->post('kode_faq'),
            'ask' =>$this->input->post('ask'),
            'question' =>$this->input->post('question'),
            'status_faq' =>$this->input->post('status_faq'),
        );
        $edit = $this->M_faq->edit($data,$where);
        if($edit){
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }

        redirect("C_setup_faq/edit/".$id);
	}

    public function delete($id)
	{
        $where = array('id_faq'=>$id);
        
        $delete = $this->M_faq->delete($where);
        if($delete){
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
        }else{
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
        }

        redirect("C_setup_faq");
	}
    // web based
    public function index_web()
	{
        $data["rs_faq"] = $this->M_faq->getAllfaq();
		$this->template->load('static_web','setup_faq_web',$data);
	}

    public function create_web()
	{
		$this->template->load('static_web','C_faq_web');
	}

    public function edit_web($id)
	{
        $data["id"]=$id;
        $data["rs_faq"] = $this->M_faq->getAllfaqById($id);
		$this->template->load('static_web','U_faq_web',$data);
	}

    public function post_create_web()
	{
        $data = array(
            // 'id_faq'   =>$this->input->post('kode_faq'),
            'ask' =>$this->input->post('ask'),
            'question' =>$this->input->post('question'),
            'status_faq' =>$this->input->post('status_faq'),
        );
        $create = $this->M_faq->create($data);
        if($create){
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }
        redirect("C_setup_faq/index_web");
	}

    public function post_edit_web($id)
	{
        $where = array('id_faq'=>$id);
        $data = array(
            'ask' =>$this->input->post('ask'),
            'question' =>$this->input->post('question'),
            'status_faq' =>$this->input->post('status_faq'),
        );
        $edit = $this->M_faq->edit($data,$where);
        if($edit){
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
        }else{
            $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
        }

        redirect("C_setup_faq/edit_web/".$id);
	}

    public function delete_web($id)
	{
        $where = array('id_faq'=>$id);
        
        $delete = $this->M_faq->delete($where);
        if($delete){
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
        }else{
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
        }

        redirect("C_setup_faq/index_web");
	}
}