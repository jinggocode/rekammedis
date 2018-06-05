<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_obatmasuk extends CI_Model{

    public function select($table){
        $data=$this->db->get($table);
        return $data->result_array();
    }
    public function save($table,$data){
        $data = $this->db->insert($table, $data);
        return $data;
    }
	public function edit($id){
		$this->db->where('kd_obat_masuk',$id);
		return $this->db->get('obat_masuk')->result();
	}
    public function ubah($data,$id){
        $this->db->where('kd_obat_masuk',$id);
        $this->db->update('obat_masuk',$data);
        return TRUE;
    }
    function hapus($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
    }
}
?>