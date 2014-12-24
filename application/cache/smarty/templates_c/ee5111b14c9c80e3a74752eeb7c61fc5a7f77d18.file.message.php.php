<?php /* Smarty version Smarty-3.0.7, created on 2014-12-12 11:49:02
         compiled from "application/views/home/message.php" */ ?>
<?php /*%%SmartyHeaderCode:1920384652548a65ae6d5d54-93242494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee5111b14c9c80e3a74752eeb7c61fc5a7f77d18' => 
    array (
      0 => 'application/views/home/message.php',
      1 => 1418356139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1920384652548a65ae6d5d54-93242494',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/whis/html/ci/sparks/smartyview/0.0.1/vendor/plugins/modifier.date_format.php';
?><html>
<head>
	<title>前台 - <?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>

<link rel="stylesheet" href="<?php echo base_url('static/css');?>
/bootstrap.css">
</head>


<body>
<div class="container" >
	<div class="row">
		<h1>留 言 板</h1>
	</div>
	<div class="row col-md-4">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">我要留言</h3>
		</div>
		<div class="panel-body">
		<form role="form" method="post" action="<?php echo site_url('message/do_insert');?>
">
			<div class="form-group">
				<label for="title">标题</label>
				<input type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label for="content">内容</label>
				<input type="text" name="content" class="form-control">
			</div>
			<div class="form-group">
				<label for="author">发布人</label>
				<input type="text" name="author" class="form-control">
			</div>
			<input type="submit" class="btn btn-primary" value="发布留言">

		</form>	
		</div>	
	</div>
	</div>
	<div class="row col-md-7 col-md-offset-1">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">留言内容</h3>
			</div>
			<div class="panel-body">
				<?php  $_smarty_tpl->tpl_vars['mess'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('messlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['mess']->key => $_smarty_tpl->tpl_vars['mess']->value){
?>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">用户：<?php echo $_smarty_tpl->tpl_vars['mess']->value['author'];?>
   &nbsp;
						<p class="label text-right">[留言时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mess']->value['c_time'],'Y-m-d H:i:s');?>
]</p></h3>
					</div>
					<div class="panel-body">
						<h4>标题：<?php echo $_smarty_tpl->tpl_vars['mess']->value['title'];?>
 </h4>
						<p><?php echo $_smarty_tpl->tpl_vars['mess']->value['content'];?>
</p>
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['mess']->value['reply'])){?>
					<div class="form-group">
						 <div class="alert alert-info" role="alert">
                                                <h5>回复：</h5>
						<p> <?php echo $_smarty_tpl->tpl_vars['mess']->value['reply'];?>
 &nbsp;[回复时间： <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['mess']->value['r_time'],'Y-m-d H:i:s');?>
] </p> 
						 </div>
							
					</div>
					<?php }?>
				</div>
				<?php }} ?>
				
			</div>
		</div>	
	</div>
</div>

</body>
</html>
