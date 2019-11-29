
<h1>Productos</h1>
<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Marca</th>
      <th scope="col">Precio</th>
      {if $isAdmin }
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>
      {/if}
      <th scope="col">Detalle</th>      
    </tr>
  </thead>
  <tbody>
    {foreach from=$Productos item=producto}
    <tr>
      <td>{$producto['nombre']}</td>
      <td>{$producto['descripcion']}</td>
      <td>{$producto['nombre_categoria']}</td>
      <td>{$producto['precio']}</td>
      {if $isAdmin }
        <td><a class="btn btn-outline-secondary" href="editarProducto/{$producto['id_producto']}"role="button">EDITAR</a></td>
        <td><a class="btn btn-outline-secondary" href="borrarProducto/{$producto['id_producto']}"role="button">BORRAR</a></td>
      {/if}
      <td><a class="btn btn-outline-secondary" href="detalleProducto/{$producto['id_producto']}">DETALLE</a></td>
    </tr>
      {/foreach}
  </tbody>
</table>
      {if $isAdmin }
        <a class="btn btn-secondary" href="nuevoProducto" role="button">AGREGAR</a>
      {/if}
</div>
