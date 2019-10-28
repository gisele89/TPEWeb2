<h1>Marcas</h1>
<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">SiteUrl</th>
      <th scope="col">Email</th>
      {if $Editable }
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
      {if $Editable }
      <td><a href="editarMarca/{$marca['id_marca']}">EDITAR</a></td>
      <td><a href="borrarMarca/{$marca['id_marca']}">BORRAR</a></td>
      {else}
      <td><a href="detalleMarca/{$marca['id_marca']}">DETALLE</a></td>
      {/if}
    </tr>
      {/foreach}
  </tbody>
</table>
      {if $Editable }
      <a href="nuevaMarca">AGREGAR</a>
      {/if}
</div>
