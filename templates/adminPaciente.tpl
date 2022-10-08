{include file="header.tpl"}
    <a type="button" href="administracion" class="revealUp3 btn ml-5 btn-outline-light">Volver</a>
<div>
  <h1 class="revealUp2">Administrar Pacientes</h1>
</div>

<div class="revealUp contenedoradmin shadow-lg p-3 mb-5 bg-body rounded">
    <form action="agregarpx" method="POST">
    <label for="basic-url" class="form-label">Datos del paciente:</label>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Paciente</span>
      <input type="text" class="form-control" name="name" placeholder="Nombre y Apellido" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
    <div class="input-group mb-3">
    <span class="input-group-text">Edad</span>
      <input type="number" class="form-control" name="edad" placeholder="Edad" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon3">DNI</span>
      <input type="number" class="form-control" name="dni" placeholder="D.N.I." id="basic-url" aria-describedby="basic-addon3">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text">Obra social</span>
            <select name="obrasocial" class="form-control" aria-label="Recipient's username">
            {foreach from=$osocial item=$obras}
                <option value="{$obras->ID}">{$obras->nombre}</option>
            {/foreach}
            </select>
      
    </div>
   
    
    <div class="input-group">
      <span class="input-group-text">Motivo de consulta</span>
      <textarea class="form-control" name="motivo" placeholder="Ingrese motivo de consulta" aria-label="With textarea"></textarea>
    </div>
        <button type="submit" class="botonagregar btn btn-primary">Agregar paciente</button>
    </form>

</div>
<div class="conteo">
{if {$count}>1}
    <h1 class="revealUp3">El sistema cuenta con {$count} pacientes ingresados</h1>
{/if}
{if {$count}==1}
    <h1 class="revealUp3">El sistema cuenta con {$count} paciente ingresado</h1>
{/if}
{if {$count}==0}
    <h1 class="revealUp3">El sistema no cuenta con pacientes ingresados</h1>
{/if}
    
</div>
</tr></tr>
<h2>Datos de pacientes:</h2>
<table class="table">
<thead class="table-light">
        <tr class="contenedor text-center">
            <th class="nombre" scope="col">Nombre</th>
            <th class="edad" scope="col">Edad</th>
            <th class="dni" scope="col">DNI</th>
            <th class="motivo" scope="col">Motivo de consulta</th>
            <th class="obrasocial" scope="col">Obra social</th>
            <th class="extra" scope="col">Acciones</th>

        </tr>
    </thead>

    {foreach from=$pacientes item=$paciente}
    
      <table class="table vertical-align: middle">
      
      <tbody class="tablapaciente2">
      <tr class="contenedor text-center">
        <th class="nombre">{$paciente->nombre}</th>
        <td class="edad">{$paciente->edad}</td>
        <td class="dni">{$paciente->dni}</td>
        <td class="motivo">{$paciente->motivo}</td>
        {if {$paciente->nombre2}==''}
        <td class="obrasocial">Sin obra social</td>   
        {else}
        <td class="obrasocial">{$paciente->nombre2}</td>     
        {/if}
        <td class="extra"><a href='borrar/{$paciente->id}' type='button' class='btn ml-auto btn-danger'>Borrar</a> <a href='modificar/{$paciente->id}' type='button' class='btn btn-primary'>Modificar</a></td>
    
      </tr>
      </tbody>
    </table>
      
  {/foreach}
{include file="footer.tpl"}
