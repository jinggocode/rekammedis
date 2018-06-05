<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	function index()
	{
		$this->load->view('login/login');
	}

	function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->m_login->cek_login($username, $password);

		if ($cek->num_rows() > 0) {
			$data = $cek->row_array();
			$data_session = array(
				'ses_id' => $data['kd_admin']
			);
			$this->session->set_userdata($data_session);
			redirect('admin_dashboard');
			return true;
		} else {
			echo "<script type='text/javascript'>
               alert('Maaf Username Dan Password Anda Salah !');</script>";
			$this->load->view('login/login', 'refresh');
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	function daftar()
	{
		$this->load->view('addon/register');
	}

	function lupapassword()
	{
		$this->load->view('user/login/lupapassword');
	}

	function inputkode()
	{
		$this->load->view('user/login/inputkode');
	}

	function resetpassword()
	{
		$this->load->view('user/login/resetpassword');
	}

	function mendaftar()
	{
		$time = time();
		$target_dirs = "upload/fotouser/";
		$target_file = $target_dirs . $time . basename($_FILES["foto"]["name"]);
		$foto = basename($_FILES["foto"]["name"]);
		move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
		$data = array(
			'nama_user' => $this->input->post('nama_user'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'gender' => $this->input->post('gender'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'foto' => $time . $foto,
			'status' => '1',
			'level' => '4'
		);
		if ($data = $this->m_login->save('user', $data)) {
			echo "<script type='text/javascript'>
	        	alert('Pendaftaran berhasil');</script>";
			$this->load->view('addon/login', 'refresh');
		} else {
			echo "<script type='text/javascript'>
	        	alert('Pendaftaran gagal');</script>";
			$this->load->view('addon/daftar', 'refresh');
		}
	}
}
