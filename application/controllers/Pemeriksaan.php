<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_pemeriksaan');
        $this->load->model('m_pasien');
        $this->load->model('m_penyakit');
        $this->load->model('m_obatdigunakan');
        $this->load->model('m_obat');
    }

	public function index()
	{
		$data = array('data' => $this->m_pemeriksaan->select('tb_pemeriksaan'));
		$this->load->view('pemeriksaan/index',$data);
	}

	public function tambah()
	{
		$data = array(
			'data_rm' => $this->m_pemeriksaan->query("select * from tb_pasien"),
			'data_penyakit' => $this->m_pemeriksaan->query("select * from tb_penyakit"),
			'data_admin' => $this->m_pemeriksaan->query("select * from admin"),
			'data_obat_digunakan' => $this->m_pemeriksaan->query("select * from obat_digunakan"),
		);
		$this->load->view('pemeriksaan/tambah',$data);
	}

	public function add(){
	    $data = array(
	        'tgl' => $this->input->post('tgl'),
	        'keluhan' => $this->input->post('keluhan'),
	        'pemeriksaan' => $this->input->post('pemeriksaan'),
	        'terapi' => $this->input->post('terapi'),
	        'no_rm' => $this->input->post('no_rm'),
	        'kd_penyakit' => $this->input->post('kd_penyakit'),
	        'kd_admin' => $this->input->post('kd_admin'),
	        'kd_obat_digunakan' => $this->input->post('kd_obat_digunakan')
	         );
	    $data = $this->m_pemeriksaan->save('tb_pemeriksaan',$data);
        redirect('pemeriksaan');
	}

	public function edit($id){
	    $data['edit'] = $this->m_pemeriksaan->edit($id);
		$this->load->view('pemeriksaan/edit',$data);
	}
	public function updatedata($id){
		$id=$this->input->post('kd_pem');
     	$data = array(
	        'tgl' => $this->input->post('tgl'),
	        'keluhan' => $this->input->post('keluhan'),
	        'pemeriksaan' => $this->input->post('pemeriksaan'),
	        'terapi' => $this->input->post('terapi'),
	        'no_rm' => $this->input->post('no_rm'),
	        'kd_penyakit' => $this->input->post('kd_penyakit'),
	        'kd_admin' => $this->input->post('kd_admin'),
	        'kd_obat_digunakan' => $this->input->post('kd_obat_digunakan')
         );
        $data = $this->m_pemeriksaan->ubah($data,$id);
        redirect('pemeriksaan');
	}
	function hapus($id){
	  $where = array('kd_pem' => $id);
	  $this->m_pemeriksaan->hapus($where,'tb_pemeriksaan');
	  redirect('pemeriksaan');
	}
}
