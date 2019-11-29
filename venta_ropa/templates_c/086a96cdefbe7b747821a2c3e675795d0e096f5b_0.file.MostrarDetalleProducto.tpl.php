<?php
/* Smarty version 3.1.33, created on 2019-11-29 02:59:30
  from 'C:\xampp\htdocs\venta_ropa\templates\MostrarDetalleProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de07b82a71d18_97410250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '086a96cdefbe7b747821a2c3e675795d0e096f5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa\\templates\\MostrarDetalleProducto.tpl',
      1 => 1574992767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:mostrarComments_csr.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5de07b82a71d18_97410250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>


    <div class="container">
      <h2>Detalle</h2>
      <form>

          <div class ="form-group" id="imagenes">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                <img src="../<?php echo $_smarty_tpl->tpl_vars['image']->value->path;?>
" alt="Imagen del producto <?php echo $_smarty_tpl->tpl_vars['Producto']->value["nombre"];?>
 "  height="300px">
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="form-group">
          <label for="nombreForm">Promedio</label>
          <input type="text" class="form-control" id="promedio" name="promedio" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["promedio"];?>
" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["nombre"];?>
" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="precioForm">Precio</label>
          <input type="text" class="form-control" id="precioForm" name="precioForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["precio"];?>
" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["descripcion"];?>
" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="materialForm">Material</label>
          <input type="text" class="form-control" id="materialForm" name="materialForm" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["material"];?>
" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="marcaForm">Marca</label>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
              <?php if ($_smarty_tpl->tpl_vars['Producto']->value['id_marca'] == $_smarty_tpl->tpl_vars['marca']->value['id_marca']) {?>
                <input type="text" class="form-control" id="marcaForm" name="materialForm" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value["nombre"];?>
" readonly="readonly">
              <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </select>
        </div>
        <input type="hidden" name="is_admin" value="<?php echo $_smarty_tpl->tpl_vars['isAdmin']->value;?>
"></input>
      </form>
 <?php $_smarty_tpl->_subTemplateRender("file:mostrarComments_csr.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <a class="btn btn-outline-secondary" href="../home" role="button">Volver</a>

    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
