<?php
class Message_model extends CI_Model{
	function __construct(){
		parent::__construct();
}
	public function get_all_message(){
	$query = $this->db->order_by('c_time desc')->get('message');
	$result = $query->result_array();
	if($result && is_array($result)){
		return $result;
	}else{
		return FALSE;
	}
}
	public function get_one_message($mid){
		$this->db->where('id',intval($mid));
		$query = $this->db->get('message');
		$result = $query->row_array();
		if($result && is_array($result)){
			return $result;
		}else{
			return FALSE;
		}
}
	public function del_one_message($mid){
		$this->db->where('id',intval($mid));
		if($this->db->delete('message')){
			return TRUE;
		}else{
			return FALSE;
		}
}

}
