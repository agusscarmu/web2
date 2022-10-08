{include file="header.tpl"}
<div class="singin">
  <h1 class="revealUp2">Iniciar sesion</h1>
</div>
<div class="revealUp login shadow-lg rounded p-3 mb-5 bg-body">
    <Form class="loginform" action="ingreso" method="POST">
      <div class="maillogin mb-5 ml5 mr5">
        <label for="exampleInputEmail1" class="form-label">Su correo electronico</label>
        <input type="email" class="form-control" name="loginmail" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="passlogin mb-5 ml5 mr5">
        <label for="exampleInputPassword1" class="form-label">Su contraseña</label>
        <input type="password" class="form-control" name="loginpass" id="exampleInputPassword1">
      </div>
      {if $error}
        <div class="alert alert-danger ml-5 mr-5 d-flex justify-content-center">
        {$error}
        </div>
      {/if}
      <div class="text-center">
      <button type="submit" class="revealUp3 botonlogin btn btn-sm btn-primary">Iniciar sesion</button>
      </div>
</Form>
</div>


{include file="footer.tpl"}