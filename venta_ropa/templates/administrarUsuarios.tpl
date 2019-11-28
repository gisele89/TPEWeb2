{include file="header.tpl"}
<h1>{$Titulo}</h1>
<div class="container">
  <ul>
    {foreach from=$usuarios item=usuario}
    <li>
      <div>
        <span>{$usuario["nombre"]}</span>
        <span>{$usuario["email"]}</p></span>
        <span><input type="checkbox" name="admin" {if $usuario["isAdmin"] == true}checked{/if}/></span>
      </div>
      <div class="login">
        <a class="btn btn-secondary" onclick="return confirm('Delete')" href="eliminarUsuario" role="button">ELIMINAR</a>
        <a class="btn btn-secondary" href="actualizarUsuario" role="button">ACTUALIZAR</a>
      </div>
    </li>
    {/foreach}
  </ul>
</div>
{include file="footer.tpl"}
