<!DOCTYPE html>
    <html lang="en">

    <head>
        <base href="{AVISO_URL}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
        <link rel="stylesheet" href="css/style2.css">
        <title>Consultorio</title>
    </head>
    <body>
    <header>
  </header>
  <style>
  
  </style>
  <nav class="navbar-expand-sm   navbar-light bg-light nav-pills nav-fill">

  <div class="shadow-lg p-3 mb-5 bg-body rounded">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="pacientes">Pacientes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ingresar">Ingresar</a>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="administracion">Administracion</a>
    </li>
    </ul>
  </div>
</nav>
    <section>
<div class="revealUp tableroaviso shadow-lg p-3 bg-body rounded mb-6">
<h1>¿Desea eliminar {$obra[0]->nombre}?</h1>
<h5>Una vez eliminada la obra social se eliminaran todos los pacientes que esten afiliados a la misma</h5>
<a href='adminseguros' type='button' class='revealUp3 btnvolver btn ml-auto btn-primary'>Volver</a>
<a href='eliminar/{$obra[0]->ID}' type='button' class='revealUp3 btnborrar btn ml-auto btn-danger'>Borrar</a>
</div>
{include file="footer.tpl"}