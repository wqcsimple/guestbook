<?php 
class Upload extends CI_Controller {
 
 function __construct()
 {
  parent::__construct();
  $this->load->helper(array('form', 'url'));
echo $this->input->ip_address().'<br>';
echo $this->input->user_agent();
 }
 
 function index()
 { 
  $this->load->view('admin/upload_form', array('error' => ' ' ));
 }

 function do_upload()
 {
  $config['upload_path'] = './uploads/';
  $config['allowed_types'] = 'gif|jpg|png';
  $config['file_name'] = time();//设置上传文件的名字 
  $config['remove_spaces'] = TRUE; //文件名中的空格被替换为下划线，
  $config['max_size'] = '100';
  $config['max_width']  = '1024';
  $config['max_height']  = '768';
  
	echo $config['upload_path'];
  $this->load->library('upload', $config);
 
  if ( ! $this->upload->do_upload())
  {
   $error = array('error' => $this->upload->display_errors());
   
   $this->load->view('admin/upload_form', $error);
  } 
  else
  {
   $data = array('upload_data' => $this->upload->data());
   
   $this->load->view('admin/upload_success', $data);
  }
 } 
}
?>




