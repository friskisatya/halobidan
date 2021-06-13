<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require 'vendor/autoload.php';
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
 
class C_login extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        $this->load->model('M_login');
        //$this->load->model('m_siswa');
    }

	public function index()
	{
		$this->load->view('login');
	}
	public function index_web()
	{
		$this->load->view('login_web');
	}


	public function auth()
	{

		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$login = $this->M_login->auth($email, $password);
		if ($login == 0) 
		{
			$select = $this->db->query("SELECT * FROM t_login WHERE email = '$email' AND password = '$password'")->row_array();
			if($select['status_verif']!='1'){
				$this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Email Belum diverifikasi</font></span>");
				redirect('C_login');
			}else{
				$this->session->set_userdata("email",$email);
				$this->session->set_userdata("nama",$select["nama"]);
				$this->session->set_userdata("location",$select["location"]);
				$this->session->set_userdata("status_admin",$select["status_admin"]);
				redirect('C_index');
			}
		}
		else
		{
			$this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Email Dan Password Tidak Cocok</font></span>");
			redirect('C_login');
		}	
	}

	public function daftar()
	{
		$this->load->view('daftar');
	}

	public function daftar_web()
	{
		$this->load->view('daftar_web');
	}

	public function post_daftar()
	{

		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$password2 = md5($this->input->post('password2'));
		$nama = $this->input->post('nama');
		$no_telp = $this->input->post('no_telp');

		//cek password 1 dan 2 sama
		if($password == $password2){
			$data = array(
				'email'=>$email,
				'password'=>$password,	
				'nama'=>$nama,
				'no_telp'=>"0"+$no_telp,
				'status'=>1
			);

			//cek apakah email sudah terdaftar
			$check = $this->db->query("SELECT * FROM t_login where email = '$email'");
			if($check->num_rows()==0){
				$this->db->insert('t_login', $data);

				$config = [
					'mailtype'  => 'html',
					'charset'   => 'utf-8',
					'protocol'  => 'smtp',
					'smtp_host' => 'smtp.gmail.com',
					'smtp_user' => '',  // Email gmail
					'smtp_pass'   => '',  // Password gmail
					'smtp_crypto' => 'ssl',
					'smtp_port'   => 465,
					'crlf'    => "\r\n",
					'newline' => "\r\n"
				];

				// Load library email dan konfigurasinya
				$this->load->library('email', $config);

				// Email dan nama pengirim
				$this->email->from('friskisatya5@gmail.com', 'HaloBidan');
		
				// Email penerima
				$this->email->to($email); // Ganti dengan email tujuan
		
				// Lampiran email, isi dengan url/path file
				// $this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');
		
				// Subject email
				$this->email->subject('Verifikasi Pendaftaran Halobidan');
		
				// Isi email
				$id_verif = $this->db->query("SELECT * FROM t_login where email = '$email'")->result();
				$url = base_url("C_login/verifikasi/").$id_verif[0]->id;
				$this->email->message("Selamat Anda telah berhasil terdaftar dalam sistem halobidan silahkan klik link berikut untuk melakukan verfikasi.<br><br> Klik <strong><a href='$url' target='_blank' rel='noopener'>disini</a></strong> untuk verifikasi");
				$send = $this->email->send();
				//var_dump($this->email->print_debugger());die;
				// Tampilkan pesan sukses atau error
				// if ($this->email->send()) {
				// 	echo 'Sukses! email berhasil dikirim.';
				// } else {
				// 	echo 'Error! email tidak dapat dikirim.';
				// }

				$this->session->set_userdata("notif_daftar","<span class='login100-form-title-1'><font size='3px' color='green'>Berhasil Daftar Silahkan Verifikasi email terlebih dahulu</font></span>");
				redirect('C_login/daftar');
			}
			else{
				$this->session->set_userdata("notif_daftar","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Email Sudah Terdaftar</font></span>");
				redirect('C_login/daftar');
			}
		}
		else
		{
			$this->session->set_userdata("notif_daftar","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Password Tidak Cocok</font></span>");
			redirect('C_login/daftar');
		}	
	}

	public function verifikasi($id)
	{
		$this->db->query("UPDATE t_login set status_verif = '1' where id = '$id'");

		$this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='green'>Email kamu berhasil melakukan verifikasi silahkan login untuk masuk ke aplikasi</font></span>");
		redirect('C_login');

	}

	public function logout()
	{
		$this->session->sess_destroy();
        redirect();
	}

	// public function lupa_password()
	// {
	// 	$this->load->view('lupa_password');
	// }

	// public function reset_password()
	// {
	// 	$this->load->view('reset_password');
	// }

	// public function reset_password_post()
	// {
	// 	$password = md5($this->input->post('password'));
	// 	$c_password = md5($this->input->post('c_password'));

	// 	if($password == $c_password){
	// 		$this->db->query("UPDATE t_login set password = '$password'");
	// 		$this->session->set_userdata('notif_reset','Berhasil Ganti Password Silahkan Login Lagi');
	// 		$this->session->set_userdata('notif','1');
	// 		redirect('C_login/reset_password');
	// 	}else{
	// 		$this->session->set_userdata('notif_reset','Password Tidak Cocok');
	// 		$this->session->set_userdata('notif','0');
	// 		redirect('C_login/reset_password');
	// 	}
	// }

	// public function lupa_password_post()
    // {
    //     $to                 = $this->input->post('email');
    //     $data_valid = $this->db->query("SELECT * FROM t_login where email = '$to'")->num_rows();
    //     if($data_valid > 0){

	//         $mail = new PHPMailer(true);

	        
	 
	//         try {
	//             $mail->SMTPDebug = SMTP::DEBUG_SERVER;
	//             $mail->isSMTP();
	//             $mail->Host       = 'smtp.googlemail.com';   
	//             $mail->SMTPAuth   = true;
	//             //$mail->Username   = 'friskisatya2@gmail.com'; // silahkan ganti dengan alamat email Anda
	//             //$mail->Password   = base64_decode ('MDYxMjE5OThmcmlza2k=');
	//             $mail->Username   = 'mh8476850@gmail.com'; // silahkan ganti dengan alamat email 
	//             $mail->Password   = 'mifta@223000'; // silahkan ganti dengan password email Anda
	//             $mail->SMTPSecure = 'ssl';
	//             $mail->Port       = 465;
	 
	//             $mail->setFrom('friskisatya2@gmail.com', 'APLIKASI INVENTORY'); // silahkan ganti dengan alamat email Anda
	//             $mail->addAddress($to);
	//             // $mail->addReplyTo('username_email_anda@gmail.com', 'Ilmu Coding'); // silahkan ganti dengan alamat email Anda
	//             // Content
	//             $mail->isHTML(true);
	//             $mail->Subject = "LUPA PASSWORD";
	//             $link = base_url('C_login/reset_password');
	//             $mail->Body    = "Silahkan klik link berikut untuk mengganti password ".$link;
	 
	//             $mail->send();
	//             $this->session->set_userdata('notif_valid','Lupa Password berhasil dikirim ke email '.$to. 'Silahkan cek email anda!');
	//             return redirect('C_login/lupa_password'); 
	//         } catch (Exception $e) {
	//         	//echo $e;die;
	//             $this->session->set_userdata('notif_valid','Terjadi Kesalahan Server');
	//             return redirect('C_login/lupa_password'); 
	//         }
	//     }else{
	//     	$this->session->set_userdata('notif_valid','Email Tidak Terdaftar');
	//         return redirect('C_login/lupa_password'); 
	//     }
    // }
}
