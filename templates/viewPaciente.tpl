{include file="header.tpl"}
    <h1 class="revealUp2">Datos de {$pacientes[0]->nombre}</h1>
    <div class="revealUp modifpx contenedoradmin shadow-lg p-3 mb-5 bg-body rounded">
        
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Nombre</span>
      <span class="form-control">{$pacientes[0]->nombre}</span>
    </div>
    
    <div class="input-group mb-3">
    <span class="input-group-text">Edad</span>
    <span class="form-control">{$pacientes[0]->edad}</span>
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon3">DNI</span>
      <span class="form-control">{$pacientes[0]->dni}</span>    
      </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text">Obra social</span>
      <span class="form-control">{$pacientes[0]->nombre2}</span>
      <span class="input-group-text">Tipo de obra social</span>
      <span class="form-control">{$pacientes[0]->tipo}</span>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Motivo de consulta</span>
      <span class="form-control">{$pacientes[0]->motivo}</span>
    </div>

    <div class="input-group mb-3">
    <span class="input-group-text">Estudios de imagenes</span>
    {if isset($pacientes->imagen)}
     
    {/if}
    {if isset($pacientes[0]->imagen)}
      <img src="{$pacientes[0]->imagen}" class="img-fluid" alt="Responsive image"/>
    {else}
      <span class="form-control">No hay estudios hechos</span>
    {/if}

    
    </div>
    {include file="footer.tpl"}
    