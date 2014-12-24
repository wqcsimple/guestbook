<?php /* Smarty version Smarty-3.0.7, created on 2014-12-12 10:59:06
         compiled from "application/views/test.html" */ ?>
<?php /*%%SmartyHeaderCode:1881333959548a59faf368c6-06188676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9f2ff380c408e869067b93eded07ab772b1e680' => 
    array (
      0 => 'application/views/test.html',
      1 => 1418353146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1881333959548a59faf368c6-06188676',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php  $_smarty_tpl->tpl_vars['mess'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('messlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['mess']->key => $_smarty_tpl->tpl_vars['mess']->value){
?>

	<?php echo $_smarty_tpl->tpl_vars['mess']->value['title'];?>


<?php }} ?>
