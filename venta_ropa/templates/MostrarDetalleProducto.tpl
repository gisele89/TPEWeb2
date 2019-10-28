{include file="header.tpl"}

    <h1>{$Titulo}</h1>


    <div class="container">
      <h2>Detalle</h2>
      <form>        
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$Producto["nombre"]}" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="precioForm">Precio</label>
          <input type="text" class="form-control" id="precioForm" name="precioForm" value="{$Producto["precio"]}" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm" value="{$Producto["descripcion"]}" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="materialForm">Material</label>
          <input type="text" class="form-control" id="materialForm" name="materialForm" value="{$Producto["material"]}" readonly="readonly">
        </div>
        <div class="form-group">
          <label for="marcaForm">Marca</label>
            {foreach from=$Marcas item=marca}
              {if $Producto['id_marca'] == $marca['id_marca']}
                <input type="text" class="form-control" id="marcaForm" name="materialForm" value="{$marca["nombre"]}" readonly="readonly">
              {/if}
            {/foreach}
          </select>
        </div>
      </form>
    </div>
{include file="footer.tpl"}
