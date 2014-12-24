<?php /* Smarty version Smarty-3.0.7, created on 2014-12-12 17:35:47
         compiled from "application/views/admin/user_update.php" */ ?>
<?php /*%%SmartyHeaderCode:1328354012548ab6f37f02e8-06672085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8583590030b035752c535b55a63ae0fe39ef6603' => 
    array (
      0 => 'application/views/admin/user_update.php',
      1 => 1418376941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1328354012548ab6f37f02e8-06672085',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="container">
	<div class="row">
		<h3><b><?php echo $_smarty_tpl->getVariable('title')->value;?>
</b></h3>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form role="form" action="<?php echo site_url('user/do_update');?>
" method="post">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('userlist')->value['id'];?>
" />
				<div class="form-group">
					<label for="manager_name">用户名 <cite class="text-danger">*</cite></label>
					<input type="text" class="form-control" id="manager_name" name="username" value="<?php echo $_smarty_tpl->getVariable('userlist')->value['username'];?>
"/>
					<span class="help-block"><small>此用户名将作为用户登录时所用的名称. 请不要与系统中现有的用户名重复.</small></span>
				</div>
				<div class="form-group">
					<label for="manager_pwd">密码 <cite class="text-danger">*</cite></label>
					<input type="password" class="form-control" id="manager_pwd" name="password" value="<?php echo $_smarty_tpl->getVariable('userlist')->value['password'];?>
"/>
					<span class="help-block"><small>为此用户分配一个密码. <br />建议使用特殊字符与字母、数字的混编样式,以增加系统安全性.</small></span>
				</div>
				<div class="form-group">
					<label for="manager_pwd">昵称 <cite class="text-danger">*</cite></label>
					<input type="text" class="form-control" id="manager_pwd" name="name" value="<?php echo $_smarty_tpl->getVariable('userlist')->value['name'];?>
"/>
					<span class="help-block"><small>用户昵称</small></span>
				</div>
			<!--	<div class="form-group">
					<label for="manager_type">用户组<cite class="text-danger">*</cite></label>
					<div class="">
						<select name="manager_type" id="manager_type">
						<option value="1">管理员</option>
						<option value="2">用户</option>
					</select>
					</div>
					<span class="help-block"><small>不同的用户组拥有不同的权限.</small></span>
				</div>
			-->
				<div class="form-group">
					<label for="manager_telphone">手机号码</label>
					<input type="number" class="form-control" id="manager_telphone" name="phone" value="<?php echo $_smarty_tpl->getVariable('userlist')->value['phone'];?>
"/>
					<span class="help-block"><small>手机号码将作为此用户的主要联系方式.请不要与系统中现有的手机号码重复.</small></span>
				</div>
				<div class="form-group">
					<label for="manager_email">邮箱</label>
					<input type="email" class="form-control" id="manager_email" name="email" value="<?php echo $_smarty_tpl->getVariable('userlist')->value['email'];?>
"/>
					<span class="help-block"><small>电子邮箱地址将作为此用户的主要联系方式. <br />请不要与系统中现有的电子邮箱地址重复.</small></span>
				</div>	
					 <input type="submit" class="btn btn-primary" value="submit" />
			
			</form>
		</div>
	</div>	
	

</div>


