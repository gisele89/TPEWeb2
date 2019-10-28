<?php
/* Smarty version 3.1.33, created on 2019-10-28 23:24:46
  from 'C:\xampp\htdocs\venta_ropa\templates\MostrarEditarMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db76aaed72115_17233053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21c24aa7e03efd66fd59b21954876b3d9056a40b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa\\templates\\MostrarEditarMarca.tpl',
      1 => 1539820172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5db76aaed72115_17233053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['Home']->value;?>
/guardarEditarMarca">
        <input type="hidden" class="form-control" id="idForm" name="idForm" value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value["id_marca"];?>
">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value["nombre"];?>
">
        </div>
        <div class="form-group">
          <label for="site_urlForm">siteurl</label>
          <input type="text" class="form-control" id="site_urlForm" name="site_urlForm" value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value["site_url"];?>
">
        </div>
        <div class="form-group">
          <label for="emailForm">Email</label>
          <input type="text" class="form-control" id="emailForm" name="emailForm" value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value["email"];?>
">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
