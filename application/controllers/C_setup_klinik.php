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
        $this->load->model('M_fasilitas');
        //$this->load->model('m_siswa');
    }

	public function index()
	{
        $data["rs_klinik"] = $this->M_klinik->getAllKlinik();
		$this->template->load('static','setup_klinik',$data);
	}
    public function index_web()
	{
        $data["rs_klinik"] = $this->M_klinik->getAllKlinik();
		$this->template->load('static_web','setup_klinik_web',$data);
	}

    public function create()
	{
        $data["rs_fasilitas"] = $this->M_fasilitas->getAllfasilitas();
		$this->template->load('static','C_klinik',$data);
	}
    public function create_web()
	{
		$this->template->load('static_web','C_klinik_web');
	}

    public function edit($id)
	{
        $data["id"]=$id;
        $data["rs_klinik"] = $this->M_klinik->getAllKlinikById($id);
        $data["rs_fasilitas"] = $this->M_fasilitas->getAllfasilitas();
		$this->template->load('static','U_klinik',$data);
	}
    public function edit_web($id)
	{
        $data["id"]=$id;
        $data["rs_klinik"] = $this->M_klinik->getAllKlinikById($id);
		$this->template->load('static_web','U_klinik_web',$data);
	}

    public function post_create()
	{
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $error = array('error' => $this->upload->display_errors());
            $data = array(
                'nama_klinik'   =>$this->input->post('nama_klinik'),
                'alamat_klinik' =>$this->input->post('alamat_klinik'),
                'telp_klinik'   =>$this->input->post('telp_klinik'),
                'tentang'       =>$this->input->post('tentang'),
                'status'        =>$this->input->post('status'),
                'latitude'      =>$this->input->post('latitude'),
                'longitude'     =>$this->input->post('longitude'),
            );
            $create = $this->M_klinik->create($data);

            $data = array();
            foreach($this->input->post('fasilitas') as $fasilitas){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data, array(
                    'id_klinik'=>$create,
                    'id_fasilitas'=>$fasilitas,
                ));
                
                $index++;
            }

            $this->db->insert_batch('t_klinik_fasilitas', $data);

            if($create){
                $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan, Tetapi gambar gagal diupload</font></span>");
            }else{
                $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
            }
        }
        else
        {
            // Get data about the file
            $uploadData = $this->upload->data(); 
            $filename = $uploadData['file_name'];

            $data = array(
                'nama_klinik'   =>$this->input->post('nama_klinik'),
                'alamat_klinik' =>$this->input->post('alamat_klinik'),
                'telp_klinik'   =>$this->input->post('telp_klinik'),
                'tentang'       =>$this->input->post('tentang'),
                'status'        =>$this->input->post('status'),
                'latitude'      =>$this->input->post('latitude'),
                'longitude'     =>$this->input->post('longitude'),
                'img_path'      =>$filename,
            );
            $create = $this->M_klinik->create($data);

            $data = array();
            foreach($this->input->post('fasilitas') as $fasilitas){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data, array(
                    'id_klinik'=>$create,
                    'id_fasilitas'=>$fasilitas,
                ));
                
                $index++;
            }

            $this->db->insert_batch('t_klinik_fasilitas', $data);

            if($create){
                $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
            }else{
                $this->session->set_userdata("notif_insert","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
            }
        }
        redirect("C_setup_klinik/create");
	}
    public function post_create_web()
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
        redirect("C_setup_klinik/index_web");
	}

    public function post_edit($id)
	{
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            // $error = array('error' => $this->upload->display_errors());
            // var_dump($error);die;
            $where = array('id_klinik'=>$id);
            $data = array(
                'nama_klinik'   =>$this->input->post('nama_klinik'),
                'alamat_klinik' =>$this->input->post('alamat_klinik'),
                'telp_klinik'   =>$this->input->post('telp_klinik'),
                'tentang'       =>$this->input->post('tentang'),
                'status'        =>$this->input->post('status'),
                'latitude'      =>$this->input->post('latitude'),
                'longitude'     =>$this->input->post('longitude'),
            );
            $edit = $this->M_klinik->edit($data,$where);

            $data = array();
            foreach($this->input->post('fasilitas') as $fasilitas){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data, array(
                    'id_klinik'=>$id,
                    'id_fasilitas'=>$fasilitas,
                ));
                
                $index++;
            }

            $this->db->query("DELETE FROM t_klinik_fasilitas where id_klinik ='$id'");
            $this->db->insert_batch('t_klinik_fasilitas', $data);

            if($edit){
                $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
            }else{
                $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
            }
        }
        else
        {
            // Get data about the file
            $uploadData = $this->upload->data(); 
            $filename = $uploadData['file_name'];

            $where = array('id_klinik'=>$id);
            $data = array(
                'nama_klinik'   =>$this->input->post('nama_klinik'),
                'alamat_klinik' =>$this->input->post('alamat_klinik'),
                'telp_klinik'   =>$this->input->post('telp_klinik'),
                'tentang'       =>$this->input->post('tentang'),
                'status'        =>$this->input->post('status'),
                'latitude'      =>$this->input->post('latitude'),
                'longitude'     =>$this->input->post('longitude'),
                'img_path'      =>$filename,
            );
            $edit = $this->M_klinik->edit($data,$where);

            $data = array();
            foreach($this->input->post('fasilitas') as $fasilitas){ // Kita buat perulangan berdasarkan nis sampai data terakhir
                array_push($data, array(
                    'id_klinik'=>$id,
                    'id_fasilitas'=>$fasilitas,
                ));
                
                $index++;
            }

            $this->db->query("DELETE FROM t_klinik_fasilitas where id_klinik= '$id'");
            $this->db->insert_batch('t_klinik_fasilitas', $data);

            if($edit){
                $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Disimpan</font></span>");
            }else{
                $this->session->set_userdata("notif_edit","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil disimpan</font></span>");
            }
        }
        redirect("C_setup_klinik/edit/".$id);
	}
    public function post_edit_web($id)
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

        redirect("C_setup_klinik/edit_web/".$id);
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
    public function delete_web($id)
	{
        $where = array('id_klinik'=>$id);
        
        $delete = $this->M_klinik->delete($where);
        if($delete){
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='green'>Data Berhasil Dihapus</font></span>");
        }else{
            $this->session->set_userdata("notif_delete","<span class='login100-form-title-1'><font size='3px' color='red'>Data tidak Berhasil Dihapus</font></span>");
        }

        redirect("C_setup_klinik/index_web");
	}
}