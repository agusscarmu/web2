{include file="header.tpl"}
<div>
  <h1 class="revealUp2">Modificar paciente</h1>
</div>
<div>
<div class="revealUp modifpx contenedoradmin shadow-lg p-3 mb-5 bg-body rounded">
    <form action="actualizar" method="POST">
    <label for="basic-url" class="form-label">Datos del paciente:</label>
   
    <div class="mb-3 ">
        <input type="hidden" id="disabledTextInput" name="id" value="{$paciente[0]->ID}" class="form-control" placeholder="{$paciente[0]->ID}">
    </div>
        
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Paciente</span>
      <input type="text" class="form-control" name="name" placeholder="Nombre y Apellido" value="{$paciente[0]->nombre}" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
    <div class="input-group mb-3">
    <span class="input-group-text">Edad</span>
      <input type="number" class="form-control" name="edad" placeholder="Edad" aria-label="Recipient's username" value="{$paciente[0]->edad}" aria-describedby="basic-addon2">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon3">DNI</span>
      <input type="number" class="form-control" name="dni" value="{$paciente[0]->dni}"  placeholder="D.N.I." id="basic-url" aria-describedby="basic-addon3">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text">Obra social</span>
      <div>
      <select name="obrasocial" class="form-control" aria-label="Recipient's username">
    
      {foreach from=$osocial item=$obras} 
            {if $paciente[0]->ID_obrasocial==$obras->ID}
                <option value="{$obras->ID}" selected>{$obras->nombre}</option>
            {else}
                <option value="{$obras->ID}">{$obras->nombre}</option>
            {/if}
            
      {/foreach}
      </select>
      </div>
      
    </div>
    
    <div class="input-group">
      <span class="input-group-text">Motivo de consulta</span>
      <input class="form-control" name="motivo" value="{$paciente[0]->motivo}" placeholder="Ingrese motivo de consulta" aria-label="With textarea"></input>

    </div>
        <button type="submit" class="botonagregar btn btn-success">Actualizar paciente</button>
    </form>
</div>
<div class="ml-5 abs-center">
<a href='borrar/{$paciente[0]->ID}' type='button' class='revealUp3 btn btn-danger shadow-lg p-3 mb-5 bg-body rounded'>Borrar paciente</a>
</div>

 </section>
 <script src="js/main.js"></script>
 </body>
 </html>