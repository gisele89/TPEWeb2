{literal}
<section id="template-vue-comments">
    <h3> Comments </h3>
    <ul>
       <li v-for="comment in comments">
            <span>{{comment.nombre}}</span>
            <span><p>{{comment.comment}}</p></span>
            <span>{{comment.puntuacion}}</span>
            <span v-if="true">              
                <input type="button" :data-id="comment.id_comment" class="btn-eliminar">Eliminar</input>
            </span>
       </li>
    </ul>
</section>
{/literal}
