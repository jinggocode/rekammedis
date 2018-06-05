<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_user extends CI_Model{

    public function select($table){
        $data=$this->db->get($table);
        return $data->result_array();
    }
    public function query($querydata){
        $data=$this->db->query($querydata);
        return $data->result_array();
    }
    public function save($table,$data){
        $data = $this->db->insert($table, $data);
        return $data;
    }
	public function edit($id){
		$this->db->where('kd_admin',$id);
		return $this->db->get('admin')->result();
	}
    public function ubah($data,$id){
        $this->db->where('kd_admin',$id);
        $this->db->update('admin',$data);
        return TRUE;
    }
    function hapus($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
    }
}
?>