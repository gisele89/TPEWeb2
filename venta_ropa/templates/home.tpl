{include file="header.tpl"}
<h1>{$Titulo}</h1>
{if $isAdmin}
  <a href="administrar">ADMIN</a>
{/if}
{if $IsUserLogged}
  <a href="logout">LOG OUT</a>
{else}
<div class="login">
  <a class="btn btn-secondary" href="login" role="button">LOG IN</a>
</div>
{/if}

{include file="producto.tpl"}
{include file="marca.tpl"}
{include file="footer.tpl"}
