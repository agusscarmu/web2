{include file="header.tpl"}
<div class="singin">
  <h1 class="revealUp">Iniciar sesion</h1>
</div>
<div class="revealUp2 login shadow-lg p-3 mb-5 bg-body rounded">
    <Form class="loginform" action="ingreso" method="POST">
      <div class="maillogin mb-3">
        <label for="exampleInputEmail1" class="form-label">Su correo electronico</label>
        <input type="email" class="form-control" name="loginmail" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="passlogin mb-3">
        <label for="exampleInputPassword1" class="form-label">Su contraseña</label>
        <input type="password" class="form-control" name="loginpass" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Iniciar sesion</button>
</Form>
</div>
<div class="relleno">
</div>
{include file="footer.tpl"}