{include file="vue/comments.tpl"}

           <form id="form-comment" action="insertar" method="post">
            {if $auth_agregar}  
             <span>
                 <textarea name="message" rows="10" cols="30"></textarea>
                 <input type="radio" name="puntuacion" value="1"> 1<br>
                 <input type="radio" name="puntuacion" value="2"> 2<br>
                 <input type="radio" name="puntuacion" value="3"> 3<br>
                 <input type="radio" name="puntuacion" value="4"> 4<br>
                 <input type="radio" name="puntuacion" value="5" checked> 5<br><br>
                 <a class="btn-agregarComment" href="#">Agregar comentario</a>
             </span>
           {/if}
           </form>

       <script src="js/comments.js"></script>
