<?php
/* Smarty version 3.1.33, created on 2019-10-31 00:57:24
  from 'C:\xampp\htdocs\venta_ropa\templates\MostrarDetalleMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dba23646f1bf8_74984658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65584d49947ab85faf2c867de7392a8bc6b53eda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa\\templates\\MostrarDetalleMarca.tpl',
      1 => 1572479839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dba23646f1bf8_74984658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>


    <div class="container">
      <h2>Detalle</h2>
      <form>
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value["nombre"];?>
" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="site_urlForm">siteurl</label>
          <input type="text" class="form-control" id="site_urlForm" name="site_urlForm" value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value["site_url"];?>
" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="emailForm">Email</label>
          <input type="text" class="form-control" id="emailForm" name="emailForm" value="<?php echo $_smarty_tpl->tpl_vars['Marca']->value["email"];?>
" readonly="readonly">
        </div>
      </form>
      
      <a class="btn btn-outline-secondary" href="../home" role="button">Volver</a>

    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
