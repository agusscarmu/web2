{include file="header.tpl"}
    <a type="button" href="administracion" class="revealUp3 btn ml-5 btn-outline-light">Volver</a>
<div>
  <h1 class="revealUp2">Administrar Obras sociales</h1>
</div>


<div class="revealUp contenedoradmin shadow-lg p-3 mb-5 bg-body rounded">
    <form action="agregaros" method="POST">
    <label for="basic-url" class="form-label">Datos de la obra social:</label>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Nombre</span>
      <input type="text" class="form-control" name="name" placeholder="Nombre de la obra social" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
    <div class="input-group mb-3">
    <span class="input-group-text">Tipo</span>
      <input type="text" class="form-control" name="tipo" placeholder="Tipo de obra social" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon3">Domicilio</span>
      <input type="text" class="form-control" name="domicilio" placeholder="Domicilio legal" id="basic-url" aria-describedby="basic-addon3">
    </div>
    
    <div class="input-group">
      <span class="input-group-text">Telefono</span>
      <input type="text" class="form-control" name="telefono" placeholder="Numero de telefono" aria-label="With textarea"></input>
    </div>
        <button type="submit" class="botonagregar btn btn-primary">Agregar obra social</button>
    </form>

</div>

<div class="conteo">
{if {$count}>1}
    <h1 class="revealUp3">El sistema cuenta con {$count} obras sociales registradas</h1>
{/if}
{if {$count}==1}
    <h1 class="revealUp3">El sistema cuenta con {$count} obra social registrada</h1>
{/if}
{if {$count}==0}
    <h1 class="revealUp3">El sistema no cuenta con obras sociales registradas</h1>
{/if}
</div>
</tr></tr>
<h2>Datos de obra social:</h2>
<table class="table vertical-align: middle">
<thead class="table-light">
        <tr class="contenedor text-center">
            <th class="nombre" scope="col">Nombre</th>
            <th class="tipo" scope="col">Tipo</th>
            <th class="domicilio" scope="col">Domicilio</th>
            <th class="telefono" scope="col">Telefono</th>
            <th class="acciones" scope="col">Editar</th>
             <th class="acciones" scope="col">Eliminar</th>
            

        </tr>
    </thead>

    {foreach from=$obras item=$obra}
    
      <table class="table vertical-align: middle">
      
      <tbody class="tablapaciente">
      <tr class="contenedor text-center">
        <th class="nombre">{$obra->nombre}</th>
        <td class="tipo">{$obra->tipo}</td>
        <th class="domicilio">{$obra->domicilio}</th>
        <td class="telefono">{$obra->telefono}</td>
        <td class="extra2"><a href='editar/{$obra->ID}' type='button' class='btn btn-primary'>Modificar</a></td>
        <td class="extra"><a href='aviso/{$obra->ID}' type='button' class='btn ml-auto btn-danger'>Borrar</a></td>

    
      </tr>
      </tbody>
    </table>
      
  {/foreach}
{include file="footer.tpl"}