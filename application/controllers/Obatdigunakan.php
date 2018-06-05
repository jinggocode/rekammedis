<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obatdigunakan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_obatdigunakan');
    }

	public function index()
	{
		$data['data'] = $this->m_obatdigunakan->query("select * from obat_digunakan left join obat on obat_digunakan.kd_obat=obat.kd_obat");
		$this->load->view('obatdigunakan/index',$data);
	}

	public function tambah()
	{
		$data = array('data_tampilan' => $this->m_obatdigunakan->select('obat'));
		$this->load->view('obatdigunakan/tambah',$data);
	}

	public function add(){
	    $data = array(
	        'jml_digunakan' => $this->input->post('jml_digunakan'),
	        'tgl_digunakan' => $this->input->post('tgl_digunakan'),
	        'kd_obat' => $this->input->post('kd_obat'),
	        'keterangan' => $this->input->post('keterangan')
	         );
	    $data = $this->m_obatdigunakan->save('obat_digunakan',$data);
        redirect('obatdigunakan');
	}

	public function edit($id){
	    $data['edit'] = $this->m_obatdigunakan->edit($id);
		$this->load->view('obatdigunakan/edit',$data);
	}
	public function updatedata($id){
		$id=$this->input->post('kd_obat_digunakan');
     	$data = array(
	        'jml_digunakan' => $this->input->post('jml_digunakan'),
	        'tgl_digunakan' => $this->input->post('tgl_digunakan'),
	        'keterangan' => $this->input->post('keterangan')
         );
        $data = $this->m_obatdigunakan->ubah($data,$id);
        redirect('obatdigunakan');
	}
	function hapus($id){
	  $where = array('kd_obat_digunakan' => $id);
	  $this->m_obatdigunakan->hapus($where,'obat_digunakan');
	  redirect('obatdigunakan');
	}
}
