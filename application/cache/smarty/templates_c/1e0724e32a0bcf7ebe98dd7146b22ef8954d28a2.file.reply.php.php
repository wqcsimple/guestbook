<?php /* Smarty version Smarty-3.0.7, created on 2014-12-12 13:50:17
         compiled from "application/views/admin/reply.php" */ ?>
<?php /*%%SmartyHeaderCode:1205534358548a821901db28-62768270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e0724e32a0bcf7ebe98dd7146b22ef8954d28a2' => 
    array (
      0 => 'application/views/admin/reply.php',
      1 => 1418362434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1205534358548a821901db28-62768270',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/home/whis/html/ci/sparks/smartyview/0.0.1/vendor/plugins/modifier.date_format.php';
?><div class="container">
	<form role="form" method="post" action="<?php echo site_url('showmess/do_reply/');?>
/<?php echo $_smarty_tpl->getVariable('message')->value['id'];?>
">
	 <div class="panel panel-primary">
					<input type="hidden" name="mid" value="<?php echo $_smarty_tpl->getVariable('message')->value['id'];?>
">
                                        <div class="panel-heading">
                                                <h3 class="panel-title">用户: <?php echo $_smarty_tpl->getVariable('message')->value['title'];?>
   &nbsp;
                                                <p class="label text-right">[留言时间：<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('message')->value['c_time'],'Y-m-d H:i:s');?>
]</p></h3>
                                        </div>
                                        <div class="panel-body">
                                                <h4>标题：<?php echo $_smarty_tpl->getVariable('message')->value['title'];?>
 </h4>
                                                <p><?php echo $_smarty_tpl->getVariable('message')->value['content'];?>
</p>
					<div class="form-group">
						<input type="text" name="reply" class="form-control" value="<?php echo $_smarty_tpl->getVariable('message')->value['reply'];?>
" placeholder="回复留言" >
					</div>
                                      	<input type="submit" class="btn btn-primary" value="回复留言">
					 </div>

          </div>
	</form>


</div>
