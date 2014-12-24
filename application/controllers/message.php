<?php
class Message extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('Message_model');
}
	public function index(){	
	$data = array(
		'title'   => '留言板',
		'messlist' => $this->Message_model->get_all_message(),
	);
	$this->load->helper('url');
	$this->smartyview->render('home/message.php',$data);	
}
	public function do_insert(){
		$post = $this->input->post(NULL,TRUE);
		$data['title']   = $post['title'];
		$data['content'] = $post['content'];
		$data['author']  = $post['author'];
		$data['c_time']  = time();
		if($this->db->insert('message',$data)){
			echo "<script type='text/javascript'>window.alert('留言发布成功！');window.history.back();</script>";
		}else{
			echo "<script type='text/javascript'>window.alert('留言发布失败！');window.history.back();</script>";
		}

}




}
