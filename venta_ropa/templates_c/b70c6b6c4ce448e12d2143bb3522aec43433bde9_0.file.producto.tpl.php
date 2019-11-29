<?php
/* Smarty version 3.1.33, created on 2019-11-29 01:11:53
  from 'C:\xampp\htdocs\venta_ropa\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de062495384d9_77184929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b70c6b6c4ce448e12d2143bb3522aec43433bde9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa\\templates\\producto.tpl',
      1 => 1574986311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de062495384d9_77184929 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Productos</h1>
<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Marca</th>
      <th scope="col">Precio</th>
      <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
      <?php }?>
      <th scope="col">Detalle</th>      
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['descripcion'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre_categoria'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['precio'];?>
</td>
      <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
        <td><a class="btn btn-outline-secondary" href="editarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"role="button">EDITAR</a></td>
        <td><a class="btn btn-outline-secondary" href="borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"role="button">BORRAR</a></td>
      <?php }?>
      <td><a class="btn btn-outline-secondary" href="detalleProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">DETALLE</a></td>
    </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
      <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
        <a class="btn btn-secondary" href="nuevoProducto" role="button">AGREGAR</a>
      <?php }?>
</div>
<?php }
}
