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
        <a class="btn btn-secondary"  href="eliminarUsuario/{$usuario["id"]}" role="button">ELIMINAR</a>
        {if $usuario["isAdmin"]}
        <a class="btn btn-secondary"  href="quitarPermisosAdmin/{$usuario["id"]}" role="button">QUITAR PERMISOS DE ADMIN</a>
      {else}
        <a class="btn btn-secondary"  href="convertirEnAdmin/{$usuario["id"]}" role="button">CONVERTIR EN ADMIN</a>
        {/if}
      </div>
    </li>
    {/foreach}
  </ul>
</div>
{include file="footer.tpl"}
