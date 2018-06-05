<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenisobat extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_jenisobat');
    }

	public function index()
	{
		$data = array('data' => $this->m_jenisobat->select('jenis_obat'));
		$this->load->view('jenisobat/index',$data);
	}

	public function tambah()
	{
		$this->load->view('jenisobat/tambah');
	}

	public function add(){
	    $data = array(
	        'nm_jenis' => $this->input->post('nm_jenis'),
	        'keterangan' => $this->input->post('keterangan')
	         );
	    $data = $this->m_jenisobat->save('jenis_obat',$data);
        redirect('jenisobat');
	}

	public function edit($id){
	    $data['edit'] = $this->m_jenisobat->edit($id);
		$this->load->view('jenisobat/edit',$data);
	}
	public function updatedata($id){
		$id=$this->input->post('kd_jenis_obat');
     	$data = array(
	        'nm_jenis' => $this->input->post('nm_jenis'),
	        'keterangan' => $this->input->post('keterangan')
         );
        $data = $this->m_jenisobat->ubah($data,$id);
        redirect('jenisobat');
	}
	function hapus($id){
	  $where = array('kd_jenis_obat' => $id);
	  $this->m_jenisobat->hapus($where,'jenis_obat');
	  redirect('jenisobat');
	}
}
