{include file="header.tpl"}

    <h1>{$Titulo}</h1>


    <div class="container">
      <h2>Formulario</h2>
      <form method="post" action="{$Home}/guardarMarca">
        <input type="hidden" class="form-control" id="idForm" name="idForm">
        <div class="form-group">
          <label for="nombreForm">Nombre</label>
          <input type="text" class="form-control" id="nombreForm" name="nombreForm">
        </div>
        <div class="form-group">
          <label for="site_urlForm">Site Url</label>
          <input type="text" class="form-control" id="site_urlForm" name="site_urlForm">
        </div>
        <div class="form-group">
          <label for="emailForm">Email</label>
          <input type="text" class="form-control" id="emailForm" name="emailForm">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>
    </div>
{include file="footer.tpl"}
