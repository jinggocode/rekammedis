<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_penyakit extends CI_Model{

    public function select($table){
        $data=$this->db->get($table);
        return $data->result_array();
    }
    public function save($table,$data){
        $data = $this->db->insert($table, $data);
        return $data;
    }
	public function edit($id){
		$this->db->where('kd_penyakit',$id);
		return $this->db->get('tb_penyakit')->row();
	}
    public function ubah($data,$id){
        $this->db->where('kd_penyakit',$id);
        $this->db->update('tb_penyakit',$data);
        return TRUE;
    }
    function hapus($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
    }
}
?>