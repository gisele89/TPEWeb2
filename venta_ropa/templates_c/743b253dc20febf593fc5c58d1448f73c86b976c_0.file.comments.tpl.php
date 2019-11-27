<?php
/* Smarty version 3.1.33, created on 2019-11-27 03:29:21
  from 'C:\xampp\htdocs\venta_ropa\templates\vue\comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddddf811f9d52_76224817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '743b253dc20febf593fc5c58d1448f73c86b976c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\venta_ropa\\templates\\vue\\comments.tpl',
      1 => 1574821186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddddf811f9d52_76224817 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="template-vue-comments">
    <h3> Comments </h3>
    <ul>
       <li v-for="comment in comments">
            <span>{{comment.nombre}}</span>
            <span><p>{{comment.comment}}</p></span>
            <span>{{comment.puntuacion}}</span>
            <span v-if="true">                
                <a class="btn-eliminar" v-on:click="deleteComment(comment.id_comment)" href="#">Eliminar</a>
            </span>
       </li>
    </ul>
</section>

<?php }
}
