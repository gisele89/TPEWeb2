<?php
/* Smarty version 3.1.33, created on 2019-11-28 02:45:27
  from 'C:\xampp\htdocs\venta_ropa\templates\registrarUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddf26b7ea6630_00187400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75a037f91e5e068afd1ad0b526dbcf5a15c661d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa\\templates\\registrarUsuario.tpl',
      1 => 1574905523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ddf26b7ea6630_00187400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <form method="post" action="registrarUsuario">
      <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="input" class="form-control" name="nombre" id="nombre" aria-describedby="usuarioId" placeholder="Usuario">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="input" class="form-control" name="email" id="email" placeholder="Email">
      </div>
      <div class="error">
        <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

      </div>
      <button type="submit" class="btn btn-secondary">CONFIRMAR REGISTRO</button>
    </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
