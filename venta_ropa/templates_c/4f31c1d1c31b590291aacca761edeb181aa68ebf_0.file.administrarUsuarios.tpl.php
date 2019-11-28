<?php
/* Smarty version 3.1.33, created on 2019-11-28 03:47:25
  from 'C:\xampp\htdocs\venta_ropa\templates\administrarUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddf353d9872d8_74400979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f31c1d1c31b590291aacca761edeb181aa68ebf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa\\templates\\administrarUsuarios.tpl',
      1 => 1574909228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ddf353d9872d8_74400979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
<div class="container">
  <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
    <li>
      <div>
        <span><?php echo $_smarty_tpl->tpl_vars['usuario']->value["nombre"];?>
</span>
        <span><?php echo $_smarty_tpl->tpl_vars['usuario']->value["email"];?>
</p></span>
        <span><input type="checkbox" name="admin" <?php if ($_smarty_tpl->tpl_vars['usuario']->value["isAdmin"] == true) {?>checked<?php }?>/></span>
      </div>
      <div class="login">
        <a class="btn btn-secondary" onclick="return confirm('Delete')" href="eliminarUsuario" role="button">ELIMINAR</a>
        <a class="btn btn-secondary" href="actualizarUsuario" role="button">ACTUALIZAR</a>
      </div>
    </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
