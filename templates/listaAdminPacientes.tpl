
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