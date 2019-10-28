{include file="header.tpl"}

    <h1>{$Titulo}</h1>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="{$Home}/guardarEditar">
        <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Producto["id_producto"]}">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$Producto["nombre"]}">
        </div>
        <div class="form-group">
          <label for="precioForm">Precio</label>
          <input type="text" class="form-control" id="precioForm" name="precioForm" value="{$Producto["precio"]}">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm" value="{$Producto["descripcion"]}">
        </div>
        <div class="form-group">
          <label for="materialForm">Material</label>
          <input type="text" class="form-control" id="materialForm" name="materialForm" value="{$Producto["material"]}">
        </div>
        <div class="form-group">
          <label for="marcaForm">Marca</label>
          <select id="marcaForm" name="marcaForm" class="form-control">
            {foreach from=$Marcas item=marca}
              {if $Producto['id_marca'] == $marca['id_marca']}
                <option value="{$marca['id_marca']}" selected=true>{$marca['nombre']}</option>
              {else}
                <option value="{$marca['id_marca']}">{$marca['nombre']}</option>
              {/if}
            {/foreach}
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
{include file="footer.tpl"}
