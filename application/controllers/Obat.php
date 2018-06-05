<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_obat');
    }

	public function index()
	{
		$data = array('data' => $this->m_obat->select('obat'));
		$this->load->view('obat/index',$data);
	}

	public function tambah()
	{
		$data = array(
			'data_jenisobat' => $this->m_obat->query("select * from jenis_obat"),
		);
		$this->load->view('obat/tambah', $data);
	}

	public function add(){
	    $data = array(
	        'nm_obat' => $this->input->post('nm_obat'),
	        'stok' => $this->input->post('stok'),
	        'expired' => $this->input->post('expired'),
	        'kd_jenis_obat' => $this->input->post('kd_jenis_obat')
	         );
	    $data = $this->m_obat->save('obat',$data);
        redirect('obat');
	}

	public function edit($id){
	    $data['edit'] = $this->m_obat->edit($id);
		$this->load->view('obat/edit',$data);
	}
	public function updatedata($id){
		$id=$this->input->post('kd_obat');
     	$data = array(
	        'nm_obat' => $this->input->post('nm_obat'),
	        'stok' => $this->input->post('stok'),
	        'expired' => $this->input->post('expired'),
	        'kd_jenis_obat' => $this->input->post('kd_jenis_obat')
         );
        $data = $this->m_obat->ubah($data,$id);
        redirect('obat');
	}
	function hapus($id){
	  $where = array('kd_obat' => $id);
	  $this->m_obat->hapus($where,'obat');
	  redirect('obat');
	}
}
