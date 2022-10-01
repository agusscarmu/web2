{include file="header.tpl"}
<div>
  <h1 class="revealUp2">Administracion</h1>
</div>

<div class="revealUp contenedoradmin shadow-lg p-3 mb-5 bg-body rounded">
    <form action="agregar" method="POST">
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
      <input type="text" class="form-control" name="obrasocial" placeholder="Obra social del paciente" aria-label="Recipient's username">
    </div>
    
    <div class="input-group">
      <span class="input-group-text">Motivo de consulta</span>
      <textarea class="form-control" name="motivo" placeholder="Ingrese motivo de consulta" aria-label="With textarea"></textarea>
    </div>
        <button type="submit" class="botonagregar btn btn-primary">Agregar paciente</button>
    </form>

</div>
    <div class="conteo">
    <h1 class="revealUp3">Actualmente hay {$count} pacientes esperando a ser atendidos</h1>
    </div>
    </tr></tr>
    <h2>Datos de pacientes:</h2>
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
    
    <tbody class="tablapaciente2">
    <tr class="contenedor">
      <th class="nombre">{$paciente->nombre}</th>
      <td class="edad">{$paciente->edad}</td>
      <td class="dni">{$paciente->dni}</td>
      <td class="motivo">{$paciente->motivo}</td>
      <td class="obrasocial">{$paciente->nombre2}</td>
      <td><a href='borrar/{$paciente->id}' type='button' class='btn btn-danger'>Borrar</a></td>
      <td><a href='modificar/{$paciente->id}' type='button' class='btn btn-primary'>Modificar</a></td>
    </tr>
    </tbody>
  </table>
    
{/foreach}
{include file="footer.tpl"}