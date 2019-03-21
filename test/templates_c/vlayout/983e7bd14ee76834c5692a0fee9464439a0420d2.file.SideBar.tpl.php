<?php /* Smarty version Smarty-3.1.7, created on 2019-03-21 11:03:34
         compiled from "/Users/anhphuc/Projects/vtiger650.local/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21369615155c936f86934c27-70335007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '983e7bd14ee76834c5692a0fee9464439a0420d2' => 
    array (
      0 => '/Users/anhphuc/Projects/vtiger650.local/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBar.tpl',
      1 => 1553165429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21369615155c936f86934c27-70335007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c936f8693945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c936f8693945')) {function content_5c936f8693945($_smarty_tpl) {?>
<div class="sideBarContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarLinks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="clearfix"></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>