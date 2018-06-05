<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_penyakit');
    }

	public function index()
	{
		$data = array('data' => $this->m_penyakit->select('tb_penyakit'));
		$this->load->view('penyakit/index',$data);
	}

	public function tambah()
	{
		$this->load->view('penyakit/tambah');
	}

	public function add(){
	    $data = array(
	        'nm_penyakit' => $this->input->post('nm_penyakit')
	         );
	    $data = $this->m_penyakit->save('tb_penyakit',$data);
        redirect('penyakit');
	}

	public function edit($id){
	    $data['edit'] = $this->m_penyakit->edit($id);
		$this->load->view('penyakit/edit',$data);
	}
	public function updatedata($id){
		$id=$this->input->post('kd_penyakit');
     	$data = array(
	        'nm_penyakit' => $this->input->post('nm_penyakit')
         );
        $data = $this->m_penyakit->ubah($data,$id);
        redirect('penyakit');
	}
	function hapus($id){
	  $where = array('kd_penyakit' => $id);
	  $this->m_penyakit->hapus($where,'tb_penyakit');
	  redirect('penyakit');
	}
}
