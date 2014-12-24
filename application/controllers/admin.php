<?php
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
}
	public function index(){
	$session = $this->session->userdata('login_name');	
	if(empty($session)){
		redirect('login','location');
	}else{
		$data = array(
			'title'=> '首页',
			'admin' => $this->session->userdata('login_name')
		);
		$this->smartyview->render('admin/header.php',$data);
		$this->smartyview->render('admin/main.php');
		$this->smartyview->render('admin/footer.php');
	}	
	
}

	
}



