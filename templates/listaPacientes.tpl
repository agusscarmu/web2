{include file="header.tpl"}
<div class="conteo">
    <h1 class="revealUp2">Actualmente hay {$count} pacientes esperando a ser atendidos</h1>
</div>
<div>
    <h1 class="revealUp3"> Lista de pacientes: </h1>
</div>
<div class="revealUp tablaspacientes shadow-lg p-3 mb-5 bg-body rounded">
<table class="table">
<thead class="table-light">
        <tr class="contenedor">
            <th class="nombre" scope="col">Nombre</th>
            <th class="edad" scope="col">Edad</th>
            <th class="dni" scope="col">DNI</th>
            <th class="motivo" scope="col">Motivo de consulta</th>
            <th class="obrasocial" scope="col">Obra social</th>
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
      
    </tr>
    </tbody>
  </table>
    
{/foreach}
</div>
{include file="footer.tpl"}
