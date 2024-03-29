{include file="header.tpl"}

    <h1>{$Titulo}</h1>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="{$Home}/guardarProducto" enctype="multipart/form-data">
        <input type="hidden" class="form-control" id="idForm" name="idForm">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm">
        </div>
        <div class="form-group">
          <label for="precioForm">Precio</label>
          <input type="text" class="form-control" id="precioForm" name="precioForm">
        </div>
        <div class="form-group">
          <label for="descripcionForm">Descripcion</label>
          <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
        </div>
        <div class="form-group">
          <label for="materialForm">Material</label>
          <input type="text" class="form-control" id="materialForm" name="materialForm">
        </div>
        <div class="form-group">
          <label for="marcaForm">Marca</label>
          <select id="marcaForm" name="marcaForm" class="form-control">
            {foreach from=$Marcas item=marca}
                <option value="{$marca['id_marca']}">{$marca['nombre']}</option>
            {/foreach}
          </select>
        </div>
        <div class="form-group">
            <input type="file" name="images[]" multiple id="images"  class="form-control" placeholder="Imagen" aria-label="Recipient's username" aria-describedby="button-addon2">
        </div>
        <button class="btn btn-outline-secondary" type="submit" >AGREGAR</button>
      </form>
    </div>
{include file="footer.tpl"}
