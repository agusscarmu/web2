{include file="header.tpl"}
   
    <div>
    {if {$paciente}}
        <h1 class="revealUp3"> Lista de pacientes con obra social: {$paciente->nombre2} </h1>
    {else}
        <h1 class="revealUp3"> No hay ningun paciente registrado con dicha obra social </h1>
    {/if}
        
    </div>
    <div class="revealUp tablaspacientes shadow-lg p-3 bg-body rounded mb-6">
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
    