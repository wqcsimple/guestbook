<?php /* Smarty version Smarty-3.0.7, created on 2014-12-12 13:50:15
         compiled from "application/views/admin/showmess.php" */ ?>
<?php /*%%SmartyHeaderCode:941252697548a82170b96a6-19821727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd73982f3730d240f40231a42d0875106d7cba356' => 
    array (
      0 => 'application/views/admin/showmess.php',
      1 => 1418362461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '941252697548a82170b96a6-19821727',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/home/whis/html/ci/sparks/smartyview/0.0.1/vendor/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/whis/html/ci/sparks/smartyview/0.0.1/vendor/plugins/modifier.date_format.php';
?><div class="container">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th><th>标题</th><th>留言内容</th><th>回复内容</th><th>留言人</th><th>留言时间</th><th>操作</th>
			</tr>
		</thead>
		<tbody>
			
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('message')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('item')->value->id;?>
 </td>
				<td><?php echo $_smarty_tpl->getVariable('item')->value->title;?>
</td>
				<td><?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('item')->value->content,20,'...');?>
</td>
				<td>
				<?php if (!isset($_smarty_tpl->getVariable('item',null,true,false)->value->reply)){?>
				<a href="<?php echo site_url('showmess/reply');?>
/<?php echo $_smarty_tpl->getVariable('item')->value->id;?>
">未回复</a>
				<?php }else{ ?>	
				<?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('item')->value->reply,20,'...');?>

				<?php }?>
				</td>
				<td><?php echo $_smarty_tpl->getVariable('item')->value->author;?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('item')->value->c_time,'Y-m-d H:i:s');?>
</td>
				<td><a href="<?php echo site_url('showmess/reply/');?>
/<?php echo $_smarty_tpl->getVariable('item')->value->id;?>
">回复</a> <a href="<?php echo site_url('showmess/do_del/');?>
/<?php echo $_smarty_tpl->getVariable('item')->value->id;?>
">删除</a></td>
			</tr>		
			<?php }} ?>
				
		</tbody>
		<thead>
                        <tr>   
                                <th>ID</th><th>标题</th><th>留言内容</th><th>回复内容</th><th>留言人</th><th>留言时间</th><th>操作</th>
                        </tr>
                </thead>

	</table>
	
	<?php echo $_smarty_tpl->getVariable('links')->value;?>


</div>
