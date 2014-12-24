<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
}
	public function index(){
	$this->smartyview->render('login/login.php');
}
	public function do_login(){
	$post =  $this->input->post(NULL,TRUE);
	if(empty($post['username']) || empty($post['password'])){
		echo "<script type='text/javascript'>window.alert('用户名和密码不能为空！');window.history.back();</script>";
	}else{
		$this->load->model('User_model');
		$return = $this->User_model->login($post['username'],$post['password']);
		if($return && is_array($return)){
			$this->session->set_userdata('login_name',$post['username']);
			$_SESSION['login_name'] = $post['username'];
			redirect('admin/index','location');
		}else{
			echo "<script type='text/javascript'>window.alert('用户名或密码错误！');window.history.back();</script>";
		}
	}
}

	public function logout(){
		$this->session->unset_userdata('login_name');
		redirect('login');
}
	

		
	



}
