<?php
class  Showmess extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('Message_model');
}
	public function index(){

	$this->load->library('pagination');
	//分页类设置
	$total_rows = $this->db->count_all('message');
	$page_size = 10;
	$config=array(
		'base_url' => site_url('showmess/index/'),
		'total_rows' => $total_rows,
		'per_page' => $page_size,
		'uri_segment' =>3,
		'first_link' => '首页',
		'last_link'  => '末页',
		'next_link' =>'下一页',
		'prev_link' =>'上一页',
		'first_tag_open' =>'<ul class="pagination">',
		'first_tag_close' => '</ul>',
	);
	$this->pagination->initialize($config);
	$offset =intval($this->uri->segment(3));
	$query = $this->db->order_by('c_time desc')->limit($page_size,$offset)->get('message');
	$data = array(
		'title' => '查看留言',
		'message'    => $query->result(),
		'links' => $this->pagination->create_links(),
		'admin' => $this->session->userdata('login_name'),
	);
	$this->smartyview->render('admin/header.php',$data);
	$this->smartyview->render('admin/showmess.php');
	$this->smartyview->render('admin/footer.php');
}
        public function do_del($mid){
                $result = $this->Message_model->del_one_message($mid);
                if($result){
                        echo "<script type='text/javascript'>window.alert('删除留言成功！');window.history.back();</script>";
                }else{  
                        echo "<script type='text/javascript'>window.alert('删除留言失败！');window.history.back();</script>";
                }
}
        public function reply($mid){
		
		$data = array(
			'title'   =>  '回复留言',
			'message' => $this->Message_model->get_one_message($mid),
			'admin'  => $this->session->userdata('login_name'),
		);
		$this->smartyview->render('admin/header.php',$data);
                $this->smartyview->render('admin/reply.php');
		$this->smartyview->render('admin/footer.php');

}
	public function do_reply(){
		$post = $this->input->post(NULL,TRUE);
		$data = array(
			'reply'  => $post['reply'],
			'r_time' => time(),
		);
		$this->db->where('id',intval($post['mid']));
		if($this->db->update('message',$data)){
			redirect('showmess','refresh');
		}else{
			echo "<script type='text/javascript'>window.alert('回复失败！');window.history.back();</script>";
		}
	
}

}



