{include file="header.tpl"}

    <h1>{$Titulo}</h1>
    <form method="post" action="registrarUsuario">
      <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="input" class="form-control" name="nombre" id="nombre" aria-describedby="usuarioId" placeholder="Usuario">
        </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="input" class="form-control" name="email" id="email" placeholder="Email">
      </div>
      <div class="error">
        {$Message}
      </div>
      <button type="submit" class="btn btn-secondary">CONFIRMAR REGISTRO</button>
    </form>
    </div>

{include file="footer.tpl"}
