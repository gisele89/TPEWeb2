<?php
/* Smarty version 3.1.33, created on 2019-11-29 03:31:20
  from 'C:\xampp\htdocs\venta_ropa\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de082f8203000_72810901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0beac2aca0a30bb80d2510644760b7a3f81b3ad8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa\\templates\\login.tpl',
      1 => 1574994677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5de082f8203000_72810901 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
    <form method="post" action="verificarLogin">
      <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="usuarioId" placeholder="Usuario">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Password">
      </div>
      <div class="error">
        <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

      </div>
      <button type="submit" class="btn btn-secondary">LOGIN</button>
      <a class="btn btn-outline-secondary" href="mostrarRegistracionUsuario">REGISTRATE</a>
    </form>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
