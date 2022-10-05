{include file="header.tpl"}


<div class="conteo">
{if {$count}>1}
    <h1 class="revealUp2">Actualmente hay {$count} pacientes esperando a ser atendidos</h1>
{/if}
{if {$count}==1}
    <h1 class="revealUp2">Actualmente hay {$count} paciente esperando a ser atendido</h1>
{/if}
{if {$count}==0}
    <h1 class="revealUp2">Actualmente no hay pacientes esperando a ser atendidos</h1>
{/if}
    
</div>
<div>
    <h1 class="revealUp3"> Lista de pacientes: </h1>
</div>
<div class="revealUp tablaspacientes shadow-lg p-3 bg-body rounded mb-6">
    <div class="input-group mb-3">
            <form action="buscar" class="input-group" method="GET">
            <span class="input-group-text">Filtrar por obra social</span>
            <select name="obrasocial" class="form-control" aria-label="Recipient's username">

            {foreach from=$osocial item=$obras} 
        
                      <option value="{$obras->ID}" selected>{$obras->nombre}</option>
               

            {/foreach}
            </select>
            <button type="submit" class="input-group-prepend input-group-text"><img class="" src="./images/icone-loupe-noir.png" height="20" width="20"></button>
            </form>
    </div>
<table class="table">
<thead class="table-light">
        <tr class="contenedor">
            <th class="nombre" scope="col">Nombre</th>
            <th class="edad" scope="col">Edad</th>
            <th class="dni" scope="col">DNI</th>
            <th class="motivo" scope="col">Motivo de consulta</th>
            <th class="obrasocial" scope="col">Obra social</th>
            <th class="acciones" scope="col"></th>
        </tr>
    </thead>
{foreach from=$pacientes item=$paciente}
    <table class="table vertical-align: middle">
    
    <tbody class="tablapaciente">
    <tr class="contenedor">
      <th class="nombre">{$paciente->nombre}</th>
      <td class="edad">{$paciente->edad}</td>
      <td class="dni">{$paciente->dni}</td>
      <td class="motivo">{$paciente->motivo}</td>
      <td class="obrasocial">{$paciente->nombre2}</td>
      <td class="acciones"><a href="ver/{$paciente->id}" type="button" class="btn btn-outline-primary">Ver paciente</a></td>
      
    </tr>
    </tbody>
  </table>
    
{/foreach}
</div>
{include file="footer.tpl"}
