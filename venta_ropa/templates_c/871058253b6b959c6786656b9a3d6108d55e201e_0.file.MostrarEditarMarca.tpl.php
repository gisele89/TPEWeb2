<?php
/* Smarty version 3.1.33, created on 2018-10-18 02:28:38
  from 'C:\xampp\htdocs\site2\templates\MostrarEditarMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc7d3b6afad78_58237631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '871058253b6b959c6786656b9a3d6108d55e201e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site2\\templates\\MostrarEditarMarca.tpl',
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
function content_5bc7d3b6afad78_58237631 (Smarty_Internal_Template $_smarty_tpl) {
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
