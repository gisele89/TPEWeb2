{include file="header.tpl"}

    <h1>{$Titulo}</h1>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="{$Home}/guardarEditarMarca">
        <input type="hidden" class="form-control" id="idForm" name="idForm" value="{$Marca["id_marca"]}">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm" value="{$Marca["nombre"]}">
        </div>
        <div class="form-group">
          <label for="site_urlForm">siteurl</label>
          <input type="text" class="form-control" id="site_urlForm" name="site_urlForm" value="{$Marca["site_url"]}">
        </div>
        <div class="form-group">
          <label for="emailForm">Email</label>
          <input type="text" class="form-control" id="emailForm" name="emailForm" value="{$Marca["email"]}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
{include file="footer.tpl"}
