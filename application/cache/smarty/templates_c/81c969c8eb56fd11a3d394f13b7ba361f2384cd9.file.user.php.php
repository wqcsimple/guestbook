<?php /* Smarty version Smarty-3.0.7, created on 2014-12-12 17:42:45
         compiled from "application/views/admin/user.php" */ ?>
<?php /*%%SmartyHeaderCode:1086741466548ab895a4c119-55180242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81c969c8eb56fd11a3d394f13b7ba361f2384cd9' => 
    array (
      0 => 'application/views/admin/user.php',
      1 => 1418377364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1086741466548ab895a4c119-55180242',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/whis/html/ci/sparks/smartyview/0.0.1/vendor/plugins/modifier.date_format.php';
?><div class="container">
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th><th>用户名</th><th>昵称</th><th>邮箱</th><th>注册时间</th><th>操作</th>
				</tr>	
			</thead>	
			
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['c_time'],'Y-m-d H:i:s');?>
</td>
					<td><a href="<?php echo site_url('user/update');?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a> <a href="<?php echo site_url('user/do_delete');?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a></td>
				</tr>

				<?php }} ?>
		
			</tbody>
			<thead>
                                <tr>   
                                        <th>ID</th><th>用户名</th><th>昵称</th><th>邮箱</th><th>注册时间</th><th>操作</th>
                                </tr>
                        </thead>

		</table>
	</div>



</div>
