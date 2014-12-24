<?php /* Smarty version Smarty-3.0.7, created on 2014-12-12 14:10:26
         compiled from "application/views/admin/header.php" */ ?>
<?php /*%%SmartyHeaderCode:1029539448548a86d277d5d1-70106826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b947bb366a32294c4f6c04e9e4287f424a55e42' => 
    array (
      0 => 'application/views/admin/header.php',
      1 => 1418364620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1029539448548a86d277d5d1-70106826',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
<head>
<title>后台 - <?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
<link rel="stylesheet" href="<?php echo base_url('static/css');?>
/bootstrap.css">
</head>


<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo site_url('admin/index');?>
">主页</a></li>
				<li><a href="<?php echo site_url('user/index');?>
">用户管理</a></li>
				<li><a href="<?php echo site_url('showmess/index');?>
">查看留言</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a>用户: <?php echo $_smarty_tpl->getVariable('admin')->value;?>
</a></li>	
				<li><a href="<?php echo site_url('login/logout');?>
">退出</a></li>
				<li><a href="<?php echo site_url();?>
" target="__blank">返回首页</a></li>
			</ul>
		</div>
	</div>
</div>



