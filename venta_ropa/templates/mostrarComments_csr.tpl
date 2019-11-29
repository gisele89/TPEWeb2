{include file="vue/comments.tpl"}
{if $IsUserLogged }
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
{/if}
<input type="hidden" name="id_usuario" value="{$id_usuario}"></input>
<input type="hidden" name="id_producto" value="{$Producto["id_producto"]}"></input>
<script src="../js/comments.js" type="text/javascript"></script>
