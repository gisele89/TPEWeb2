<?php
/* Smarty version 3.1.33, created on 2019-11-29 00:13:38
  from 'C:\xampp\htdocs\venta_ropa\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de054a2ee49a4_22100271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db5a1803117b52e9231d1a6caedb7480d232c660' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa\\templates\\admin.tpl',
      1 => 1574982776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:producto.tpl' => 1,
    'file:marca.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5de054a2ee49a4_22100271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
  <a href="administrar">ADMIN</a>
<?php }
if ($_smarty_tpl->tpl_vars['IsUserLogged']->value) {?>
  <a href="logout">LOG OUT</a>
<?php }
$_smarty_tpl->_subTemplateRender("file:producto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:marca.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
