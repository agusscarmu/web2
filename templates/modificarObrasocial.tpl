{include file="header.tpl"}
<div>
  <h1 class="revealUp2">Modificar obra social</h1>
</div>
</tr></tr>
<div class="revealUp contenedoradmin shadow-lg p-3 mb-5 bg-body rounded">
    <form action="actualizaros" method="POST">
    <label for="basic-url" class="form-label">Datos de la obra social:</label>
    <div class="mb-3">
        <input type="hidden" id="disabledTextInput" name="id" value="{$obrasocial[0]->ID}" class="form-control" placeholder="{$obrasocial[0]->ID}">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Nombre</span>
      <input type="text" class="form-control" name="name" value="{$obrasocial[0]->nombre}" placeholder="{$obrasocial[0]->nombre}" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
    <div class="input-group mb-3">
    <span class="input-group-text">Tipo</span>
      <input type="text" class="form-control" name="tipo"  value="{$obrasocial[0]->tipo}" placeholder="{$obrasocial[0]->tipo}" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon3">Domicilio</span>
      <input type="text" class="form-control" name="domicilio" value="{$obrasocial[0]->domicilio}" placeholder="{$obrasocial[0]->domicilio}" id="basic-url" aria-describedby="basic-addon3">
    </div>
    
    <div class="input-group">
      <span class="input-group-text">Telefono</span>
      <input type="text" class="form-control" name="telefono" value="{$obrasocial[0]->telefono}" placeholder="{$obrasocial[0]->telefono}" aria-label="With textarea"></input>
    </div>
        <button type="submit" class="botonagregar btn btn-success">Actualizar obra social</button>
    </form>

</div>
<div class="ml-5 abs-center">
<a href='borrar/{$obrasocial[0]->ID}' type='button' class='revealUp3 btn btn-danger shadow-lg p-3 mb-5 bg-body rounded'>Borrar obra social</a>
</div>
{include file="footer.tpl"}