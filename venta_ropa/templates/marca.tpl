<h1>Marcas</h1>
<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">SiteUrl</th>
      <th scope="col">Email</th>
      {if $isAdmin }
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
      {else}
      <th scope="col">Detalle</th>
      {/if}
    </tr>
  </thead>
  <tbody>
    {foreach from=$Marcas item=marca}
    <tr>
      <td>{$marca['nombre']}</td>
      <td>{$marca['site_url']}</td>
      <td>{$marca['email']}</td>
      {if $isAdmin }
      <td><a class="btn btn-outline-secondary" href="editarMarca/{$marca['id_marca']}" role="button">EDITAR</a></td>
      <td><a class="btn btn-outline-secondary" href="borrarMarca/{$marca['id_marca']}"role="button">BORRAR</a></td>
      {else}
      <td><a class="btn btn-outline-secondary" href="detalleMarca/{$marca['id_marca']}">DETALLE</a></td>
      {/if}
    </tr>
      {/foreach}
  </tbody>
</table>
      {if $isAdmin }
      <a class="btn btn-secondary" href="nuevoMarca" role="button">AGREGAR</a>
      {/if}
</div>
