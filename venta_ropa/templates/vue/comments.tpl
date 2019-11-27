{literal}
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
{/literal}
