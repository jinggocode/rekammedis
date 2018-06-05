<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obatmasuk extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_obatmasuk');
    }

	public function index()
	{
		$data = array('data' => $this->m_obatmasuk->select('obat_masuk'));
		$this->load->view('obatmasuk/index',$data);
	}

	public function tambah()
	{
		$this->load->view('obatmasuk/tambah');
	}

	public function add(){
	    $data = array(
	        'jml_masuk' => $this->input->post('jml_masuk'),
	        'tgl_masuk' => $this->input->post('tgl_masuk'),
	        'keterangan' => $this->input->post('keterangan')
	         );
	    $data = $this->m_obatmasuk->save('obat_masuk',$data);
        redirect('obatmasuk');
	}

	public function edit($id){
	    $data['edit'] = $this->m_obatmasuk->edit($id);
		$this->load->view('obatmasuk/edit',$data);
	}
	public function updatedata($id){
		$id=$this->input->post('kd_obat_masuk');
     	$data = array(
	        'jml_masuk' => $this->input->post('jml_masuk'),
	        'tgl_masuk' => $this->input->post('tgl_masuk'),
	        'keterangan' => $this->input->post('keterangan')
         );
        $data = $this->m_obatmasuk->ubah($data,$id);
        redirect('obatmasuk');
	}
	function hapus($id){
	  $where = array('kd_obat_masuk' => $id);
	  $this->m_obatmasuk->hapus($where,'obat_masuk');
	  redirect('obatmasuk');
	}
}
