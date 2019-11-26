{literal}
<section id="template-vue-comments">

    <h3> Comments </h3>

    <ul>
       <li v-for="comment in comments">
            <span><p>{{comment.comment}}</p></span>
            <span v-if="auth_eliminar">
                <a data-id="{{comment.id}}" class="btn-eliminar" href="#">Eliminar</a>
            </span>
       </li>
    </ul>
</section>
{/literal}
