{include file="vue/comments.tpl"}
<form id="form-comment" action="insertar" method="post">
 <span>
     <textarea name="comment" rows="10" cols="30"></textarea>
     <input type="radio" name="puntuacion" value="1"/> 1<br>
     <input type="radio" name="puntuacion" value="2"/> 2<br>
     <input type="radio" name="puntuacion" value="3"/> 3<br>
     <input type="radio" name="puntuacion" value="4"/> 4<br>
     <input type="radio" name="puntuacion" value="5" checked/> 5<br><br>
     <input type="hidden" name="id_producto" value="{$Producto["id_producto"]}"></input>
     <input type="hidden" name="id_usuario" value="1"></input>
     <button class="btn btn-outline-secondary" type="submit" >Agregar comentario</button>
 </span>
</form>
<script src="../js/comments.js" type="text/javascript"></script>
