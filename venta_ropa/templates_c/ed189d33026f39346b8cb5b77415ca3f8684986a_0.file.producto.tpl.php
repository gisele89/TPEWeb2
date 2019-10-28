<?php
/* Smarty version 3.1.33, created on 2018-10-19 04:31:14
  from 'C:\xampp\htdocs\site2\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc941f244abe1_86417368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed189d33026f39346b8cb5b77415ca3f8684986a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\site2\\templates\\producto.tpl',
      1 => 1539916239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc941f244abe1_86417368 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Productos</h1>
<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <?php if ($_smarty_tpl->tpl_vars['Editable']->value) {?>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
      <?php } else { ?>
      <th scope="col">Detalle</th>
      <?php }?>
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
      <?php if ($_smarty_tpl->tpl_vars['Editable']->value) {?>
      <td><a href="editarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">EDITAR</a></td>
      <td><a href="borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">BORRAR</a></td>
      <?php } else { ?>
      <td><a href="detalleProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
">DETALLE</a></td>
      <?php }?>
    </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
      <?php if ($_smarty_tpl->tpl_vars['Editable']->value) {?>
      <a href="nuevoProducto">AGREGAR</a>
      <?php }?>
</div>
<?php }
}
