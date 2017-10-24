<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Login_model extends CI_model  {

	function is_login($username,$password){

		$sql = "select iduser,username,password,status from user 
				where username = ? and password = ? ";
		$query = $this->db->query($sql,array($username,$password));
		return $query;
	}


	function get_user($key,$value){
		if($this->db->get_where('user',array($key => $value))->num_rows() == 0) return false;
		return $this->db->get_where('user',array($key => $value))->row_array();
	}

	function reset_password($id_user,$time_request){
		return $this->db->update('user',array('REQUEST_RESET' => $time_request),array('ID_USER' => $id_user));
	}

	public function current_password($idUser){
		return $this->db->get_where('user',array('ID_USER' => $idUser))->row_array()['PASSWORD'];
	}

	public function change_password($idUser,$new_password){
		return $this->db->update('user',array('PASSWORD' => $new_password),array('ID_USER' => $idUser));
	}


}
             