{include file="header.tpl"}
<div class="conteo">
{if {$count}>1}
    <h1 class="revealUp2">El sistema cuenta con {$count} obras sociales</h1>
{/if}
{if {$count}==1}
    <h1 class="revealUp2">El sistema cuenta con {$count} obra social</h1>
{/if}
{if {$count}==0}
    <h1 class="revealUp2">No hay obras sociales registradas</h1>
{/if}
    
</div>
<div>
    <h1 class="revealUp3"> Lista de Obras Sociales: </h1>
</div>
<div class="revealUp tablaspacientes shadow-lg p-3 bg-body rounded mb-6">
<table class="table">
<thead class="table-light">
        <tr class="contenedor">
            <th class="" scope="col"></th>
            <th class="nombre" scope="col">Nombre</th>
            <th class="tipo" scope="col">Tipo</th>
            <th class="domicilio" scope="col">Domicilio</th>
            <th class="telefono" scope="col">Telefono</th>
            <th class="" scope="col"></th>
        </tr>
    </thead>
{foreach from=$obras item=$obra}
    <table class="table vertical-align: middle">
    
    <tbody class="tablapaciente">
    <tr class="contenedor">
        <th class="" scope="col"></th>
        <th class="nombre">{$obra->nombre}</th>
        <td class="tipo">{$obra->tipo}</td>
        <td class="domicilio">{$obra->domicilio}</td>
        <td class="telefono">{$obra->telefono}</td>
        <th class="" scope="col"></th>
    </tr>
    </tbody>
  </table>
    
{/foreach}
</div>
{include file="footer.tpl"}