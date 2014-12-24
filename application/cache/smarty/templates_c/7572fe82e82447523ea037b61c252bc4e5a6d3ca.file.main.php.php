<?php /* Smarty version Smarty-3.0.7, created on 2014-12-12 11:50:05
         compiled from "application/views/admin/main.php" */ ?>
<?php /*%%SmartyHeaderCode:1876726880548a65ed14b077-31557581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7572fe82e82447523ea037b61c252bc4e5a6d3ca' => 
    array (
      0 => 'application/views/admin/main.php',
      1 => 1418350932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1876726880548a65ed14b077-31557581',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="container">
	<div class="page-header"></div>

	<div class="row" >
		<div class="col-md-6">
			<div class="panel panel-default " role="alert">
		
            <div class="panel-heading">
              <h3 class="panel-title"><b>当前用户信息</b></h3>
            </div>
            
            <div class="panel-body">
              <table class="table table-striped table-bordered">
              	<tbody>
	              	<tr>
	              		<th>用户身份</th><td></td>
	              	</tr>
	              	<tr>
	              		<th>上次登录时间</th><td></td>
	              	</tr>
	              	<tr>
	              		<th>上次登录IP</th><td> </td>
	              	</tr>
	              	<tr>
	              		<th>浏览器类型</th><td></td>
	              	</tr>
	              	<tr>
	              		<th>当前登录IP</th><td><<?php ?>?=$this->input->ip_address()?<?php ?>></td>
	              	</tr>
	              
              	</tbody>
              </table>
            </div>
        	</div>		
		</div>
		<div class="col-md-6">
			<div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><b>系统信息</b></h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered">
              	<tbody>
              		<tr>
              			<th>服务器主机名:IP</th><td><<?php ?>?=$this->input->server('SERVER_NAME').':'.$this->input->server('SERVER_ADDR')?<?php ?>> </td>
              		</tr>
	              	<tr>
	              		<th>操作系统</th><td><<?php ?>?=php_uname('s')?<?php ?>></td>
	              	</tr>
	              	<tr>
	              		<th>服务器版本</th><td><<?php ?>?=$this->input->server('SERVER_SOFTWARE')?<?php ?>></td>
	              	</tr>
	              	<tr>
	              		<th>Mysql版本</th><td><<?php ?>?=mysql_get_server_info()?<?php ?>></td>
	              	</tr>
	              	<tr>
	              		<th>文件上传</th><td><<?php ?>?php if(ini_get('file_uploads')==1):?<?php ?>>开启<<?php ?>?php else: ?<?php ?>>关闭<<?php ?>?php endif;?<?php ?>></td>
	              	</tr>
	              	<tr>
	              		<th>文件上传最大大小</th><td><<?php ?>?=ini_get("upload_max_filesize")?<?php ?>></td>
	              	</tr>
	              	<tr>
	              		<th>时区设置</th><td><<?php ?>?=date_default_timezone_get()?<?php ?>></td>
	              	</tr>
              	</tbody>
              </table>
            </div>
        	</div>
		</div>
	</div>	

</div>
