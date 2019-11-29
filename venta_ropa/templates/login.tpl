{include file="header.tpl"}

    <h1>{$Titulo}</h1>
    <form method="post" action="verificarLogin">
      <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="usuarioId" placeholder="Usuario">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Password">
      </div>
      <div class="error">
        {$Message}
      </div>
      <button type="submit" class="btn btn-secondary">LOGIN</button>
      <a class="btn btn-outline-secondary" href="mostrarRegistracionUsuario">REGISTRATE</a>
    </form>
    </div>

{include file="footer.tpl"}
