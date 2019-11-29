<?php
/* Smarty version 3.1.33, created on 2019-11-29 02:41:58
  from 'C:\xampp\htdocs\venta_ropa\templates\mostrarComments_csr.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de07766e8de99_29356970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e572b9721c2f15b4341c3282283c6ad863801d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa\\templates\\mostrarComments_csr.tpl',
      1 => 1574991713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:vue/comments.tpl' => 1,
  ),
),false)) {
function content_5de07766e8de99_29356970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:vue/comments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['IsUserLogged']->value) {?>
<form id="form-comment" action="insertar" method="post">
 <span>
     <textarea name="comment" rows="10" cols="30"></textarea>
     <input type="radio" name="puntuacion" value="1"/> 1<br>
     <input type="radio" name="puntuacion" value="2"/> 2<br>
     <input type="radio" name="puntuacion" value="3"/> 3<br>
     <input type="radio" name="puntuacion" value="4"/> 4<br>
     <input type="radio" name="puntuacion" value="5" checked/> 5<br><br>
     <button class="btn btn-outline-secondary" type="submit" >Agregar comentario</button>
 </span>
</form>
<?php }?>
<input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
"></input>
<input type="hidden" name="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['Producto']->value["id_producto"];?>
"></input>
<?php echo '<script'; ?>
 src="../js/comments.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php }
}
