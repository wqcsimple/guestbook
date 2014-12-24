<?php /* Smarty version Smarty-3.0.7, created on 2014-12-12 11:28:08
         compiled from "application/views/login/login.php" */ ?>
<?php /*%%SmartyHeaderCode:1442736881548a60c8c79717-37570900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f119764c900a8ab5b52797ff60cd94ca07fab896' => 
    array (
      0 => 'application/views/login/login.php',
      1 => 1418354699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1442736881548a60c8c79717-37570900',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
<head>
	<title>登录 </title>
	<link rel="stylesheet" href="<?php echo base_url('static/css');?>
/bootstrap.css">
</head>

<body>
<div class="container">
<form role="form" method="post" action="<?php echo site_url('login/do_login');?>
">
	<div class="col-md-4 col-md-offset-4">
		<h1>LOGIN</h1>
		<div class="form-group">
			<input type="text" class="form-control" name="username" placeholder="username">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="password" placeholder="password">
		</div>
		<input class="btn btn-primary form-control" type="submit" value="登录">
	</div>
</form>
</div>

</body>
</html>
