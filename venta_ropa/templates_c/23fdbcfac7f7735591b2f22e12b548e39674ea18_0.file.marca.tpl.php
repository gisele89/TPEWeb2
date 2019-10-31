<?php
/* Smarty version 3.1.33, created on 2019-10-31 01:11:45
  from 'C:\xampp\htdocs\venta_ropa\templates\marca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dba26c1895757_25075348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23fdbcfac7f7735591b2f22e12b548e39674ea18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa\\templates\\marca.tpl',
      1 => 1572480693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dba26c1895757_25075348 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Marcas</h1>
<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">SiteUrl</th>
      <th scope="col">Email</th>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['marca']->value['nombre'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['marca']->value['site_url'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['marca']->value['email'];?>
</td>
      <?php if ($_smarty_tpl->tpl_vars['Editable']->value) {?>
      <td><a class="btn btn-outline-secondary" href="editarMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
" role="button">EDITAR</a></td>
      <td><a class="btn btn-outline-secondary" href="borrarMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
"role="button">BORRAR</a></td>
      <?php } else { ?>
      <td><a class="btn btn-outline-secondary" href="detalleMarca/<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
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
      <a class="btn btn-secondary" href="nuevoMarca" role="button">AGREGAR</a>
      <?php }?>
</div>
<?php }
}
