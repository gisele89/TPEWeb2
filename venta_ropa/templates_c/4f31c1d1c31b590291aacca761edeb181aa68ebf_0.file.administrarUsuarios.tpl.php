<?php
/* Smarty version 3.1.33, created on 2019-11-28 23:34:57
  from 'C:\xampp\htdocs\venta_ropa\templates\administrarUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de04b91a82ea8_19906909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f31c1d1c31b590291aacca761edeb181aa68ebf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa\\templates\\administrarUsuarios.tpl',
      1 => 1574980457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5de04b91a82ea8_19906909 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a class="btn btn-secondary"  href="eliminarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value["id"];?>
" role="button">ELIMINAR</a>
        <?php if ($_smarty_tpl->tpl_vars['usuario']->value["isAdmin"]) {?>
        <a class="btn btn-secondary"  href="quitarPermisosAdmin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value["id"];?>
" role="button">QUITAR PERMISOS DE ADMIN</a>
      <?php } else { ?>
        <a class="btn btn-secondary"  href="convertirEnAdmin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value["id"];?>
" role="button">CONVERTIR EN ADMIN</a>
        <?php }?>
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
