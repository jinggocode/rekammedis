<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_user');
    }

	public function index()
	{
		$data = array('data' => $this->m_user->select('admin'));
		$this->load->view('admin/user/index',$data);
	}

	public function tambah()
	{
		$this->load->view('admin/user/tambah');
	}

	public function add(){
	    $data = array(
	        'nm_admin' => $this->input->post('nm_admin'),
	        'username' => $this->input->post('username'),
	        'password' => $this->input->post('password')
	         );
	    $data = $this->m_user->save('admin',$data);
        redirect('user');
	}

	public function edit($id){
	    $data['edit'] = $this->m_user->edit($id);
		$this->load->view('admin/user/edit',$data);
	}
	public function updatedata($id){
		$id=$this->input->post('kd_admin');
     	$data = array(
	        'nm_admin' => $this->input->post('nm_admin'),
	        'username' => $this->input->post('username'),
	        'password' => $this->input->post('password')
         );
        $data = $this->m_user->ubah($data,$id);
        redirect('user');
	}
	function hapus($id){
	  $where = array('kd_admin' => $id);
	  $this->m_user->hapus($where,'admin');
	  redirect('user');
	}
}
