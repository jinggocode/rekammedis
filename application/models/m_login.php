<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_login extends CI_Model{

    function cek_login($username,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
        return $query;
    }

	public function edit($id){
		$this->db->where('id_user',$id);
		return $this->db->get('user')->result();
	}

    public function save($table,$data){
        $data = $this->db->insert($table, $data);
        return $data;
    }
}
?>