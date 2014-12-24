<?php
class User_model extends CI_Model{

	public function login($username,$password){
		$query = $this->db->query('SELECT * FROM whis_user WHERE username=? AND password=?',array($username,MD5($password)));//封装查询
		$result = $query->row_array();
		if($result && is_array($result)){
			if($result['username']==$username && $result['password']==MD5($password)){
				return $result;	
			}else{
				return FALSE;	
			}
		}else{
			return false;
		}
	}	
	
	public function get_all_user(){
		$query = $this->db->order_by('c_time desc')->get('user');
		$result = $query->result_array();
		if($result && is_array($result)){
			return $result;
		}else{
			return FALSE;
		}
		
	}

	public function get_one_user($mid){
		$query = $this->db->where('id',intval($mid))->get('user');
		$result = $query->row_array();
		if($result && is_array($result)){
			return $result;
		}else{
			return FALSE;
		}
	}
	
	public function del_one_user($mid){
		$this->db->where('id',intval($mid));
		if($this->db->delete('user')){
			return TRUE;
		}else{
			return FALSE;
		}
	}



}



