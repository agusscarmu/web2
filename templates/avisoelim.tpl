{include file="header.tpl"}
<link rel="stylesheet" href="css/style2.css">

<div class="revealUp tableroaviso shadow-lg p-3 bg-body rounded mb-6">
<h3>¿Desea eliminar {$obra[0]->nombre}?</h3>
<h5>Una vez eliminada la obra social se eliminaran todos los pacientes que esten afiliados a la misma</h5>
<a href='adminseguros' type='button' class='revealUp3 btnvolver btn ml-auto btn-primary'>Volver</a>
<a href='eliminar/{$obra[0]->ID}' type='button' class='revealUp3 btnborrar btn ml-auto btn-danger'>Borrar</a>
</div>
{include file="footer.tpl"}