<?php
class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}
 	public function index(){
	$result = $this->User_model->get_all_user();
	$data = array(
		'title'  => '用户管理',
		'userlist'=> $result,	
		'admin'  => $this->session->userdata('login_name'),
	);
	$this->smartyview->render('admin/header.php',$data);
	$this->smartyview->render('admin/user.php');
	$this->smartyview->render('admin/footer.php');
}
	
	public function update($mid){
		$data = array(
			'title' => '用户信息修改',
			'admin' => $this->session->userdata('login_name'),
			'userlist' => $this->User_model->get_one_user($mid),
		);
		$this->smartyview->render('admin/header.php',$data);	
		$this->smartyview->render('admin/user_update.php');
		$this->smartyview->render('admin/footer.php');
	}

	public function do_update(){
		$post = $this->input->post(NULL,TRUE);
		$rst = $this->db->where('id',$post['id'])->update('user',$post);
		if($rst){
			redirect('user/index','refresh');
		}else{
			echo "<script type='text/javascript'>window.alert('修改失败！');window.history.back();</script>";
		}
	}
	
	public function do_delete($mid){
		$result = $this->User_model->del_one_user($mid);
		if($result){
			echo "<script type='text/javascript'>window.alert('删除成功！');window.history.back();</script>";
		}else{
			echo "<script type='text/javascript'>window.alert('删除失败！');window.history.back();</script>";
		}
	}













	
}
