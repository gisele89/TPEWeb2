<?php
/* Smarty version 3.1.33, created on 2018-10-19 02:36:45
  from 'C:\xampp\htdocs\site2\templates\MostrarAgregarMarca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc9271da7f181_15406800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6824de62a96069ddbf67e2032dd0d094f5667262' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site2\\templates\\MostrarAgregarMarca.tpl',
      1 => 1539826339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc9271da7f181_15406800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['Home']->value;?>
/guardarMarca">
        <input type="hidden" class="form-control" id="idForm" name="idForm">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm">
        </div>
        <div class="form-group">
          <label for="site_urlForm">Site Url</label>
          <input type="text" class="form-control" id="site_urlForm" name="site_urlForm">
        </div>
        <div class="form-group">
          <label for="emailForm">Email</label>
          <input type="text" class="form-control" id="emailForm" name="emailForm">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
