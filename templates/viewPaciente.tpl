{include file="header.tpl"}
   
    <div>
        <h1 class="revealUp3"> Inspeccionar a {$pacientes[0]->nombre} </h1>
    </div>
    <div class="revealUp tablaspacientes shadow-lg p-3 bg-body rounded mb-6">
    <form action="buscar" class="input-group mb-3" method="GET">
      <input type="text" class="form-control" name="name" placeholder="Buscar paciente" aria-label="Username" aria-describedby="basic-addon1">
      <button type="submit" class="input-group-prepend input-group-text"><img class="" src="./images/icone-loupe-noir.png" height="20" width="20"></button>
    </form>
    <table class="table">
    <thead class="table-light">
            <tr class="contenedor">
                <th class="nombre" scope="col">Nombre</th>
                <th class="edad" scope="col">Edad</th>
                <th class="dni" scope="col">DNI</th>
                <th class="motivo" scope="col">Motivo de consulta</th>
                <th class="obrasocial" scope="col">Obra social</th>
                <th class="extra" scope="col">Tipo de obra social</th>
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
          <td class="extra">{$paciente->tipo}</td>
        </tr>
        </tbody>
      </table>
        
    {/foreach}
    </div>
    {include file="footer.tpl"}
    