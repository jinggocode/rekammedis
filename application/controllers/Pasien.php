<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_pasien');
    }

	public function index()
	{
		$data = array('data' => $this->m_pasien->select('tb_pasien'));
		$this->load->view('pasien/index',$data);
	}

	public function tambah()
	{
		$this->load->view('pasien/tambah');
	}

	public function add(){

		$date2 = $this->input->post('tgl_lahir');
		$tgl_lahir = date("Y-m-d", strtotime($date2));
	    $data = array(
	        'nama' => $this->input->post('nama'),
	        'tempat_lahir' => $this->input->post('tempat_lahir'),
	        'tgl_lahir' => $tgl_lahir,
	        'jns_kelamin' => $this->input->post('jns_kelamin'),
	        'prodi' => $this->input->post('prodi'),
	        'no_hp' => $this->input->post('no_hp'),
	        'awal_periksa' => $this->input->post('awal_periksa'),
	        'alergi_obat' => $this->input->post('alergi_obat'),
	        'riwayat_penyakit' => $this->input->post('riwayat_penyakit'),
	         );

	    $data = $this->m_pasien->save('tb_pasien',$data);
        redirect('pasien');
	}

	public function edit($id){
	    $data['edit'] = $this->m_pasien->edit($id);
		$this->load->view('pasien/edit',$data);
	}
	public function updatedata($id){
		$id=$this->input->post('no_rm');
     	$data = array(
	        'nama' => $this->input->post('nama'),
	        'tempat_lahir' => $this->input->post('tempat_lahir'),
	        'tgl_lahir' => $this->input->post('tgl_lahir'),
	        'jns_kelamin' => $this->input->post('jns_kelamin'),
	        'prodi' => $this->input->post('prodi'),
	        'no_hp' => $this->input->post('no_hp'),
	        'awal_periksa' => $this->input->post('awal_periksa'),
	        'alergi_obat' => $this->input->post('alergi_obat'),
	        'riwayat_penyakit' => $this->input->post('riwayat_penyakit'),
         );
        $data = $this->m_pasien->ubah($data,$id);
        redirect('pasien');
	}
	function hapus($id){
	  $where = array('no_rm' => $id);
	  $this->m_pasien->hapus($where,'tb_pasien');
	  redirect('pasien');
	}
}
